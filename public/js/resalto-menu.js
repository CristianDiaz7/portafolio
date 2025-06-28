document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    function activarMenuEnSeccion() {
        let scrollY = window.pageYOffset;
        const windowHeight = window.innerHeight;
        const pageHeight = document.body.scrollHeight;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 50;
            const sectionId = current.getAttribute('id');

            // Condición para última sección: si estamos casi al final de la página,
            // forzamos que active la última sección
            const isLastSection = (sectionTop + sectionHeight) >= (pageHeight - windowHeight);

            if ((scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) 
                || (isLastSection && (scrollY + windowHeight) >= pageHeight)) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', activarMenuEnSeccion);
    activarMenuEnSeccion();
});
