const mobileSlider = () => {
    try {
        const sliderField = document.querySelectorAll('.mobile-slider');

        sliderField.forEach(slider => {
            let sliderTrack = slider.querySelector('.mobile-slider-track'),
                sliderList = slider.querySelector('.mobile-slider-list'),
                slides = slider.querySelectorAll('.mobile-slider-item'),
                sliderDots = slider.querySelector('.mobile-slider-dots'),
                slideWidth = 0,
                slideIndex = 0,
                slidesCount = slides.length;

            let sliderDotsItems;

            const slide = () => {
                sliderDotsItems.forEach(item => item.classList.remove('active'));

                sliderDotsItems[slideIndex].classList.add('active');
                sliderTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
            }

            const moveRight = () => {
                slideIndex + 1 >= slidesCount ? slideIndex = 0 : slideIndex++;
                slide();
            }

            const moveLeft = () => {
                slideIndex <= 0 ? slideIndex = slidesCount - 1 : slideIndex--;
                slide();
            }

            const setSlideWidth = () => {
                slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
            }

            const setDots = () => {
                if (!sliderDotsItems) {
                    for(let i = 0; i < slidesCount; i++) {
                        sliderDots.innerHTML += '<span></span>';
                    }

                    sliderDotsItems = sliderDots.querySelectorAll('span');
                    sliderDotsItems[0].classList.add('active');

                    sliderDotsItems.forEach((dot, i) => {
                        dot.addEventListener('click', () => {
                            slideIndex = i;
        
                            slide();
                        });
                    });
                }
            }

            setDots();

            sliderTrack.style.transition = 'transform 0.5s ease 0s';

            setSlideWidth();

            let startPos = 0;
        
            sliderList.addEventListener('touchstart', (e) => {
                if (window.innerWidth > 576) return;

                startPos = e.changedTouches[0].screenX;
            });
        
            sliderList.addEventListener('touchend', (e) => {
                if (window.innerWidth > 576) return;

                if (startPos - e.changedTouches[0].screenX > 50) {
                    moveRight();
                } else if (startPos - e.changedTouches[0].screenX < -50) {
                    moveLeft();
                }
            });

            window.addEventListener("resize", () => {
                setSlideWidth();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default mobileSlider;