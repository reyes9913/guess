
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function (position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        const locationElement = document.getElementById("location");
        locationElement.textContent = `Latitud: ${latitude}, Longitud: ${longitude}`;
    }, function (error) {
        console.error("Error al obtener la ubicación:", error.message);
    });
} else {
    console.error("La geolocalización no es compatible con este navegador.");
}
