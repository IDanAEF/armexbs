window.addEventListener('DOMContentLoaded', () => {
    try {
        //for products forms
        const productFeed = document.querySelector('#product-feed-btn'),
              productVersions = document.querySelectorAll('.version-feed-btn');

        const putInputs = (vers = '') => {
            const modalForm = document.querySelector('.feedback-modal[data-content="'+productFeed.getAttribute('data-content')+'"] form'),
                  prodId = productFeed.parentElement.getAttribute('data-sect').trim(),
                  prodName = document.querySelector('#product-name').textContent.trim();

            modalForm.querySelector('input[name="feedevent"]').value = 34;
            modalForm.querySelector('input[name="feedproduct"]').value = prodName;
            modalForm.querySelector('input[name="feedproductid"]').value = prodId;
            modalForm.querySelector('input[name="feedversion"]').value = vers;
        }
        
        productFeed && productFeed.addEventListener('click', () => {
            putInputs();
        });

        productVersions.forEach(vers => {
            vers.addEventListener('click', () => {
                putInputs(vers.parentElement.querySelector('.version-feed-name').textContent.trim());
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //cases images
        const stateImages = document.querySelectorAll('.state__images img'),
              stateText = document.querySelector('.state__text');

        const outImg = (firstCopy) => {
            const imgMobile = document.createElement('img');
            imgMobile.classList.add('mobile');
            imgMobile.src = firstCopy.src;
            imgMobile.alt = firstCopy.alt;

            return imgMobile;
        }

        if (stateImages && stateImages[0]) {
            let count = 1,
                all = stateImages.length;

            stateText.prepend(outImg(stateImages[0]));

            const uls = stateText.querySelectorAll('ul');

            for (let i = 1; i < all;  i++) {
                if (uls[i - 1]) {
                    count++;

                    uls[i - 1].after(outImg(stateImages[i]));
                } else break;
            }

            for (let i = count; i < all;  i++) {
                stateText.append(outImg(stateImages[i]));
            }
        }
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //products main plashs
        const links = document.querySelectorAll('.main__products-right a');

        links.forEach(link => {
            if (link.offsetHeight > 55) {
                const i = link.querySelector('i');

                link.style.maxWidth = (i.offsetWidth + 40) +'px';
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const resetTarg = document.querySelectorAll('.reset-act');

        resetTarg.forEach(targ => {
            targ.addEventListener('click', (e) => {
                e.preventDefault();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
});