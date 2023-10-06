const forms = () => {
    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const forms = document.querySelectorAll('form:not(.static)');

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

    try {
        //forms lists
        const formLists = document.querySelectorAll('.form-list');

        formLists.forEach(list => {
            const listInput = list.querySelector('input'),
                  listItems = list.querySelectorAll('.form-list__item'),
                  listTitle = list.querySelector('.form-list__head');
            
            listTitle.addEventListener('click', () => {
                listTitle.classList.toggle('active');
                listTitle.nextElementSibling.classList.toggle('active');
            });

            listItems.forEach(item => {
                item.addEventListener('click', () => {
                    listTitle.classList.remove('active');
                    listTitle.nextElementSibling.classList.remove('active');

                    listInput.value = item.textContent.trim();
                    listTitle.querySelector('span').textContent = item.textContent.trim();
                });
            });

            document.documentElement.addEventListener('click', (e) => {
                if (e.target != listTitle) {
                    listTitle.classList.remove('active');
                    listTitle.nextElementSibling.classList.remove('active');
                }
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;