import './bootstrap';

import '../sass/app.scss'

function removeRedBorder() {
    let inputUsername = document.getElementById('username');
    let inputPassword = document.getElementById('password');

    inputUsername.classList.remove("is-invalid");
    inputPassword.classList.remove("is-invalid");
}
