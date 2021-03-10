const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const containers = document.getElementById('containers');

signUpButton.addEventListener('click', () => {
    containers.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    contaier.classList.remove("right-panel-active");
});