document.addEventListener("DOMContentLoaded", function () {
    const imageElement = document.getElementById("foto-logo");

    const images = [
        {
            src: '/images/foto-de-perfil.jpg',
            alt: 'Foto de Cristian'
        },
        {
            src: '/images/logo.jpeg',
            alt: 'Logo de terotero'
        }
       
    ];

    let index = 0;

    setInterval(() => {
        index = (index + 1) % images.length;
        imageElement.src = images[index].src;
        imageElement.alt = images[index].alt;
    }, 5000);
});
