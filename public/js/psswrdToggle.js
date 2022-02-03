const psswrdToggle = document.querySelector('#psswrdToggle');
const psswrd = document.querySelector('#psswrd');

psswrdToggle.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = psswrd.getAttribute('type') === 'password' ? 'text' : 'password';
    psswrd.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});