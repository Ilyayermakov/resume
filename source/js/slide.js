function slidesPlugin() {
    const slides = document.querySelectorAll('.slide');
    for (const slide of slides) {
        slide.addEventListener('click', () => {
            if (slide.classList.contains('active')) {
                slide.classList.remove('active');
            } else {
                clearActiveClasses();
                slide.classList.add('active');
            }
        });
    }
    function clearActiveClasses() {
        slides.forEach((slide) => {
            slide.classList.remove('active');
        });
    }
}
slidesPlugin();
