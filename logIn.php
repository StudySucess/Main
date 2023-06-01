<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to the welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
                
        // Store the hashed password in the database
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
                    if (mysqli_stmt_fetch($stmt)) {
                        
                        // Verify the hashed password
                        if (password_verify($password, $hashed_password)) {
                            
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            
                            // Redirect user to index page
                            header("location: index.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "There is something wrong with the password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Username doesn't exist.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/register.css" rel="stylesheet" />
    <title>Log in</title>
</head>

<body>
    <div class="headDisplay">
        <a href="index.php"><img class="logo" src="images/logoHD.png"></a>
        <div class="registerTab">
            <h1>Sign in</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" id="nameInput" name="username" placeholder="Name">
                <span class="error"><?php echo $username_err; ?></span>
                <input type="password" id="passInput" name="password" placeholder="Password">
                <span class="error"><?php echo $password_err; ?></span>
                <br>
                <span class="error"><?php echo $login_err; ?></span>

                <input type="submit" value="Sign in" class="submit">
            </form>
            <p class="signOption">New to StudySuccesHub? <a id="link" href="register.php">Sign up</a></p>
        </div>
    </div>
</body>

</html>
