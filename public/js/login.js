const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('conta');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

// function validateForm() {
//     if (document.forms["daftar"]["nama"].value == "") {
//         alert("Nama Tidak Boleh Kosong");
//         document.forms["daftar"]["nama"].focus();
//         return false;
//     }
//     if (document.forms["daftar"]["email"].value == "") {
//         alert("Email Tidak Boleh Kosong");
//         document.forms["daftar"]["email"].focus();
//         return false;
//     }
//     if (document.forms["daftar"]["username"].value == "") {
//         alert("username tidak boleh kosong");
//         document.forms["daftar"]["username"].focus();
//         return false;
//     }

//     if (document.forms["daftar"]["password"].value == "") {
//         alert("password tidak boleh kosong");
//         document.forms["daftar"]["password"].focus();
//         return false;
//     }
// }
