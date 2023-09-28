const simpleSlider = () => {
    try {
        //promo slider example
        const simpleSlider = document.querySelectorAll('.simple-slider');

        simpleSlider.forEach(slider => {
            const sliderItems = slider.querySelectorAll('.simple-slider-item'),
                  sliderDots = slider.querySelector('.simple-slider-dots');

            let count = sliderItems.length,
                curr = 0;

            for(let i = 0; i < count; i++) {
                sliderDots.innerHTML += '<span></span>';
            }

            const sliderDotsItems = sliderDots.querySelectorAll('span');

            const setSlide = () => {
                sliderItems.forEach(item => item.classList.remove('active'));
                sliderDotsItems.forEach(item => item.classList.remove('active'));

                sliderItems[curr].classList.add('active');
                sliderDotsItems[curr].classList.add('active');
            }

            setSlide();

            let interval = setInterval(() => {
                curr == count - 1 ? curr = 0 : curr++;

                setSlide();
            }, 10000);

            sliderDotsItems.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    clearInterval(interval);
                    curr = i;
                    setSlide();

                    interval = setInterval(() => {
                        curr == count - 1 ? curr = 0 : curr++;
                        
                        setSlide();
                    }, 10000);
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default simpleSlider;