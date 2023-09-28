const slider = () => {
    try {
        const sliderField = document.querySelectorAll('.slider');

        sliderField.forEach(slider => {
            let sliderTrack = slider.querySelector('.slider-track'),
                sliderList = slider.querySelector('.slider-list'),
                slides = slider.querySelectorAll('.slide'),
                slideWidth = 0,
                slideRight = slider.querySelector('.right'),
                slideLeft = slider.querySelector('.left'),
                slideIndex = 0,
                slidesCount = slides.length;

            const getVisCount = () => {
                if (window.innerWidth <= 576 && slider.getAttribute('data-mob-vis')) {
                    return +slider.getAttribute('data-mob-vis');
                } else if (window.innerWidth <= 768 && slider.getAttribute('data-tablet-vis')) {
                    return +slider.getAttribute('data-tablet-vis');
                } else if (window.innerWidth <= 1200 && slider.getAttribute('data-lap-vis')) {
                    return +slider.getAttribute('data-lap-vis');
                } else if (slider.getAttribute('data-pc-vis')) {
                    return +slider.getAttribute('data-pc-vis');
                } 

                return 1;
            };

            const slide = () => {
                sliderTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
            }

            const moveRight = () => {
                slideIndex + getVisCount() >= slidesCount ? slideIndex = 0 : slideIndex++;
                slide();
            }

            const moveLeft = () => {
                slideIndex <= 0 ? slideIndex = slidesCount - getVisCount() : slideIndex--;
                slide();
            }

            const setSlideWidth = () => {
                //slideWidth = slides[0].offsetWidth + +window.getComputedStyle(sliderTrack).gridColumnGap.replace('px', '');
                slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
            }

            sliderTrack.style.transition = 'transform 0.5s ease 0s';

            setSlideWidth();

            let startPos = 0;
        
            sliderList.addEventListener('touchstart', (e) => {
                startPos = e.changedTouches[0].screenX;
            });
        
            sliderList.addEventListener('touchend', (e) => {
                if (startPos - e.changedTouches[0].screenX > 50) {
                    moveRight();
                } else if (startPos - e.changedTouches[0].screenX < -50) {
                    moveLeft();
                }
            });

            document.body.addEventListener('click', (e) => {
                if (e.target == slideRight) moveRight();
                if (e.target == slideLeft) moveLeft();
            });

            window.addEventListener("resize", () => {
                setSlideWidth();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default slider;