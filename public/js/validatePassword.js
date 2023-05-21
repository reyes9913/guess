const { event } = require("jquery");

const passwordInput = document.querySelector('#passwordInput');
const passwordInputConfirm = document.querySelector('#passwordInputConfirm');

passwordInput.addEventListener('keyup', (event) =>{

    const password = passwordInput.value.val();
    passwordInputConfirm.val(password);

});

