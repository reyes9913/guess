const selectElement = document.querySelector('.cope');

selectElement.addEventListener('change', (event) => {

    // Selecciona el elemento 'select' por su clase 'zone'
    const selectZone = document.querySelector('.zone');
    selectZone.innerHTML = 'Seleciona una zona';

    // Hace la llamada a la API y agrega las opciones al 'select' cuando se resuelve la promesa
    fetch('/api/cope/' + event.target.value + '/zones')
        .then(response => response.json())
        .then(data => {
            // Crea un nuevo elemento 'option' para cada elemento en el array 'data'
            data.forEach(zone => {

                const optionElement = document.createElement('option');
                optionElement.value = zone.id;
                optionElement.text = zone.name;

                // Agrega el elemento 'option' al 'select'
                selectZone.appendChild(optionElement);
            });
        })
        .catch(error => console.error(error));


});


