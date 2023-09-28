const forms = () => {
    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            const inputs = form.querySelectorAll('input'),
                  successModal = document.querySelector('.success-modal[data-success="'+form.getAttribute('data-success')+'"]');

            inputs.forEach(input => {
                let placehold = input.placeholder;

                input.addEventListener('focus', () => {
                    if (input.classList.contains('placeholder-hide'))
                        input.placeholder = '';
                });
                input.addEventListener('blur', () => {
                    if (input.classList.contains('placeholder-hide'))
                        input.placeholder = placehold;
                });
            });

            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(form);

                postData(form.action, formData)
                .then((res) => {
                    successModal.classList.add('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;