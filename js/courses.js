//Retrieve data from the API

let imgs = []

let exampleDataLength = 11;
let courseContainer = document.getElementsByClassName("courseContainer")[0];

//Loading the data onto the web
function displayCourses(data) {

    courseContainer.innerHTML = "";

    for (let index = 0; index < exampleDataLength; index++) {

        let title = "IT-Essentials";
        let year = "2022-2023";
        let tutor = "Geert Coulummier";

        let courseElement = document.createElement("div");
        courseElement.innerHTML = `
        <h3>${title}</h3>
        <h4>Academiejaar ${year}</h4>
        <p>${tutor}</p>
        `
        // courseElement.style.backgroundImage = "url(../images/example/Java-logo.png)"

        courseContainer.appendChild(courseElement);
    }
}


//code to execute

displayCourses("");