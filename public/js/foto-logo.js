document.addEventListener("DOMContentLoaded", function () {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");

    const images = [
        {
            src: '/images/foto-de-perfil.jpg',
            alt: 'Cristian'
        },
        {
            src: '/images/logo.jpeg',
            alt: 'Logo Terotero'
        }
    ];

    let index = 0;
    let showingImg1 = true;

    setInterval(() => {
        index = (index + 1) % images.length;

        const [current, next] = showingImg1 ? [img1, img2] : [img2, img1];

        next.src = images[index].src;
        next.alt = images[index].alt;

        // Fade in/out cruzado
        next.classList.add('visible');
        current.classList.remove('visible');

        showingImg1 = !showingImg1;
    }, 4000);
});
