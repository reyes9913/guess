
// Obtén una referencia al botón y los campos de entrada
var editarBtn = document.getElementById('btn_edit_customer');
var nameInput = document.getElementById('address');
// Agrega un evento de clic al botón
editarBtn.addEventListener('click', function () {
    // Habilita la edición del campo de entrada

    nameInput.removeAttribute('readonly');
    alert('alv me vad');
    // También puedes agregar lógica similar para los otros campos de entrada
});


var editarBtn2 = document.getElementById('btn_edit_instalation_data');
var number_orderInput = document.getElementById('number_order');
var footage_typeInput = document.getElementById('footage_type');
var phoneInput = document.getElementById('phone');
var os_typeInput = document.getElementById('os_type');
var pisaplexInput = document.getElementById('pisaplex');
var districtInput = document.getElementById('district');
var portInput = document.getElementById('port');
var terminalInput = document.getElementById('terminal');
var contracted_speedInput = document.getElementById('contracted_speed');
var delivered_speedInput = document.getElementById('delivered_speed');
var principal_secInput = document.getElementById('principal_sec');
var principal_parInput = document.getElementById('principal_par');
var diviceInput = document.getElementById('divice');




editarBtn2.addEventListener('click', function () {

    pisaplexInput.removeAttribute('readonly');
    os_typeInput.removeAttribute('readonly');
    districtInput.removeAttribute('readonly');
    portInput.removeAttribute('readonly');
    terminalInput.removeAttribute('readonly');
    contracted_speedInput.removeAttribute('readonly');
    delivered_speedInput.removeAttribute('readonly');
    principal_secInput.removeAttribute('readonly');
    principal_parInput.removeAttribute('readonly');
    diviceInput.removeAttribute('readonly');



});
