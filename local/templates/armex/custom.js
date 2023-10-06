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
});