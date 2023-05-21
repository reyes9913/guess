const nameId = document.querySelector('#nameId');
const miBoton = document.querySelector('#btnAplicar');
const nameCustomerInput = document.querySelector('#nameCustomer');
const numberOneInput = document.querySelector('#number_one');
const addressInput = document.querySelector('#Address');
const numberTwoInput = document.querySelector('#number_two');
const betweenStreetsInput = document.querySelector('#between_streets');
const buildingInput = document.querySelector('#buliding');
const deptoInput = document.querySelector('#depto');
const municipalityInput = document.querySelector('#municipality');
const cityInput = document.querySelector('#city');


miBoton.addEventListener('click', () => {



    fetch('/api/customers/details/' + nameId.value)
        .then(response => response.json())
        .then(data => {

            const customer = data[0]; // asumiendo que solo hay un cliente en el arreglo

            // llenar los inputs con los datos del cliente
            nameCustomerInput.value = customer.name;
            numberOneInput.value = customer.number_one;
            addressInput.value = customer.address;
            numberTwoInput.value = customer.number_two;
            betweenStreetsInput.value = customer.between_streets;
            buildingInput.value = customer.building;
            deptoInput.value = customer.depto;
            municipalityInput.value = customer.municipality;
            cityInput.value = customer.city;

        })
        .catch(error => console.error(error));

});
