const passwordInput = document.getElementById('password');
const showPasswordToggle = document.getElementById('showPasswordToMe');

showPasswordToggle.addEventListener('change', function () {
    if (this.checked) {
        passwordInput.setAttribute('type', 'text');
    } else {
        passwordInput.setAttribute('type', 'password');
    }
});