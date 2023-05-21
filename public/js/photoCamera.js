const btnCapturar = document.getElementById('btn-capturar');
const capturaImg = document.getElementById('captura-img');
const fotoCapturada = document.getElementById('foto-capturada');

btnCapturar.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg.src = dataURL;
        capturaImg.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar2 = document.getElementById('btn-capturar-2');
const capturaImg2 = document.getElementById('captura-img-2');
const fotoCapturada2 = document.getElementById('foto-capturada-2');

btnCapturar2.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar2.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg2.src = dataURL;
        capturaImg2.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada2.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar3 = document.getElementById('btn-capturar-3');
const capturaImg3 = document.getElementById('captura-img-3');
const fotoCapturada3 = document.getElementById('foto-capturada-3');

btnCapturar3.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar3.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg3.src = dataURL;
        capturaImg3.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada3.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar4 = document.getElementById('btn-capturar-4');
const capturaImg4 = document.getElementById('captura-img-4');
const fotoCapturada4 = document.getElementById('foto-capturada-4');

btnCapturar4.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar4.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg4.src = dataURL;
        capturaImg4.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada4.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar5 = document.getElementById('btn-capturar-5');
const capturaImg5 = document.getElementById('captura-img-5');
const fotoCapturada5 = document.getElementById('foto-capturada-5');

btnCapturar5.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar5.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg5.src = dataURL;
        capturaImg5.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada5.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar6 = document.getElementById('btn-capturar-6');
const capturaImg6 = document.getElementById('captura-img-6');
const fotoCapturada6 = document.getElementById('foto-capturada-6');

btnCapturar6.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar6.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg6.src = dataURL;
        capturaImg6.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada6.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar7 = document.getElementById('btn-capturar-7');
const capturaImg7 = document.getElementById('captura-img-7');
const fotoCapturada7 = document.getElementById('foto-capturada-7');

btnCapturar7.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar7.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg7.src = dataURL;
        capturaImg7.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada7.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar8 = document.getElementById('btn-capturar-8');
const capturaImg8 = document.getElementById('captura-img-8');
const fotoCapturada8 = document.getElementById('foto-capturada-8');

btnCapturar8.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar8.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg8.src = dataURL;
        capturaImg8.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada8.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar9 = document.getElementById('btn-capturar-9');
const capturaImg9 = document.getElementById('captura-img-9');
const fotoCapturada9 = document.getElementById('foto-capturada-9');

btnCapturar9.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar9.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg9.src = dataURL;
        capturaImg9.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada9.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar10 = document.getElementById('btn-capturar-10');
const capturaImg10 = document.getElementById('captura-img-10');
const fotoCapturada10 = document.getElementById('foto-capturada-10');

btnCapturar10.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar10.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg10.src = dataURL;
        capturaImg10.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada10.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar11 = document.getElementById('btn-capturar-11');
const capturaImg11 = document.getElementById('captura-img-11');
const fotoCapturada11 = document.getElementById('foto-capturada-11');

btnCapturar11.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar11.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg11.src = dataURL;
        capturaImg11.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada11.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});

const btnCapturar12 = document.getElementById('btn-capturar-12');
const capturaImg12 = document.getElementById('captura-img-12');
const fotoCapturada12 = document.getElementById('foto-capturada-12');

btnCapturar12.addEventListener('click', function() {
  // Acceder a la cámara
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
      const video = document.createElement('video');
      video.srcObject = stream;
      video.play();

      // Capturar la foto
      btnCapturar12.addEventListener('click', function() {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

        // Convertir la imagen del canvas a una URL de datos (data URL)
        const dataURL = canvas.toDataURL('image/jpeg');

        // Mostrar la imagen capturada en la tarjeta
        capturaImg12.src = dataURL;
        capturaImg12.style.display = 'block';

        // Adjuntar la imagen capturada al formulario como un campo oculto
        fotoCapturada12.value = dataURL;
      });
    })
    .catch(function(error) {
      console.error('Error al acceder a la cámara:', error);
    });
});





