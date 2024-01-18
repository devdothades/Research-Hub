import Swal from "sweetalert2";

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});


Swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
})

// function loadDoc() {`
//     const xhttp = new XMLHttpRequest();
//     xhttp.onload = function() {
//      console.log("working");



//       }
//     xhttp.open("GET", "./scripts/authentication/signin.php", true);
//     xhttp.send();
//   }