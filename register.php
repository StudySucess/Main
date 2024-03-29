<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$fname = $username = $email = $password = $confirm_password = $role = "";
$fname_err = $username_err = $email_err = $password_err = $confirm_password_err = $role_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validate full name
    if (empty(trim($_POST["fname"]))) {
        $fname_err = "Please enter your full name.";
    } elseif (strlen($_POST["fname"]) < 6) {
        $fname_err = "The full name should be at least 6 characters."; 
    } else {
        $fname = trim($_POST["fname"]);
        $fname = ucwords(strtolower($fname));
        
        // Check if full name already exists
        $sql = "SELECT id FROM users WHERE full_name = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fullname);

            // Set parameters
            $param_fullname = $fname;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }



    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } elseif (strlen($_POST["username"]) < 3) {
        $username_err = "The username should be at least 3 characters.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $email = trim($_POST["email"]);
        
        // Check if email already exists
        $sql = "SELECT id FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already registered.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } elseif (!preg_match('/[!@#$%^&*]/', $_POST["password"])) {
        $password_err = "Password must contain at least one symbol (!, @, #, $, %, ^, &, *).";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate role
    if (empty($_POST["role"])) {
        $role_err = "Please select a role.";
    } else {
        $role = $_POST["role"];
    }

    // Check input errors before inserting into database
    if (empty($fname_err) && empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($role_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (full_name, username, email, password, role) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_fname, $param_username, $param_email, $param_password, $param_role);

            // Set parameters
            $param_fname = $fname;
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_role = $role;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Registration successful, set session variables and redirect to index.php
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("location: index.php");
                exit;
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
    <title>Registration</title>
</head>

<body>
    <div class="headDisplay">
        <a href="index.php"><img class="logo" src="images/logoHD.png"></a>
        <div class="registerTab">
            <h1>Sign up</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" id="fname" name="fname" placeholder="Full name" value="<?php echo $fname; ?>">
                <span class="error"><?php echo $fname_err; ?></span>
                
                <input type="text" id="nameInput" name="username" placeholder="Name" value="<?php echo $username; ?>">
                <span class="error"><?php echo $username_err; ?></span>
                
                <input type="email" id="emailInput" name="email" placeholder="Email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $email_err; ?></span>
                
                <input type="password" id="passInput" name="password" placeholder="Password">
                <span class="error"><?php echo $password_err; ?></span>
                
                <input type="password" id="passInput" name="confirm_password" placeholder="Confirm Password">
                <span class="error"><?php echo $confirm_password_err; ?></span>

                <!-- if the user an studen or teacher -->
                <select name="role" id="roleSelect">
                    <option value="student">Student</option>
                    <option value="docent">Teacher</option>
                </select>
                <span class="error"><?php echo $role_err; ?></span>
                
                <input type="submit" value="Sign up" class="submit">
            </form>
            <p class="signOption">Already have an account? <a id="link" href="login.php">Sign in</a></p>
        </div>
    </div>
</body>

</html>
