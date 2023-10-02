const gallery = () => {
    try {
        const galleryFields = document.querySelectorAll('.gallery-items'),
              galleryBtns = document.querySelectorAll('.gallery-call'),
              galleryOverlay = document.querySelector('.gallery__overlay'),
              galleryClose = document.querySelector('.gallery__overlay-close'),
              galleryRight = document.querySelector('.gallery__overlay-arrow.right'),
              galleryLeft = document.querySelector('.gallery__overlay-arrow.left'),
              galleryBlock = document.querySelector('.gallery__overlay-block');

        let galleryImage = document.createElement('img');
        galleryImage.classList.add('gallery__overlay-image');
        galleryBlock.append(galleryImage);

        let index = 0,
            galleryItems;

        const setImage = () => {
            galleryImage.src = galleryItems[index].getAttribute('data-full');

            if (index == 0) galleryLeft.style.display = 'none';
            else galleryLeft.style.display = '';

            if (index == galleryItems.length - 1) galleryRight.style.display = 'none';
            else galleryRight.style.display = '';
        }

        galleryFields.forEach(gallery => {
            const items = gallery.querySelectorAll('.gallery-item');

            items.forEach((item, i) => {
                item.addEventListener('click', () => {
                    galleryItems = items;

                    index = i;
                    setImage();
                    galleryOverlay.classList.add('active');
                });
            });
        });

        galleryRight.addEventListener('click', () => {
            index++;

            setImage();
        });

        galleryLeft.addEventListener('click', () => {
            index--;

            setImage();
        });

        galleryBtns.forEach(btn => {
            const btnNext = btn.nextElementSibling;

            btn.addEventListener('click', () => {
                if (btnNext.classList.contains('gallery-items')) 
                    btnNext.querySelector('.gallery-item').click();
            });
        });

        galleryOverlay.addEventListener('click', (e) => {
            if (e.target == galleryOverlay || e.target == galleryClose) {
                galleryImage.src = '';
                galleryOverlay.classList.remove('active');
            }
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default gallery;