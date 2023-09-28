const catalog = () => {
    async function getData(url) {
        let res = await fetch(url, {
            method: "GET"
        });

        return await res.text();
    }
    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }
    function getCookie(name, json=false) {
        if (!name) return undefined;

        let matches = document.cookie.match(new RegExp(
          "(?:^|; )" + name.replace(/([.$?*|{}()\[\]\\\/+^])/g, '\\$1') + "=([^;]*)"
        ));

        if (matches) {
          let res = decodeURIComponent(matches[1]);
          if (json) {
            try {
              return JSON.parse(res);
            }
            catch(e) {}
          }
          return res;
        }

        return undefined;
    }
    function setCookie(name, value, hours) {
        var expires;
        if (hours || hours === 0) {
            var date = new Date();
            date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        else {
            expires = "";
        }
        document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    try {
        //filter
        const filters = document.querySelectorAll('.catalog__filter-control'),
              heads = document.querySelectorAll('.catalog__filter-head');

        heads.forEach(oneHead => {
            oneHead.addEventListener('click', () => {
                heads.forEach(item => {
                    if (oneHead != item) {
                        item.classList.remove('active');
                        item.nextElementSibling.classList.remove('active');
                    }
                });
            });
        });

        filters.forEach(filt => {
            const filtList = filt.querySelector('.catalog__filter-list'),
                  filtListItems = filt.querySelectorAll('.catalog__filter-list li'),
                  filtHead = filt.querySelector('.catalog__filter-head'),
                  filtValue = filt.querySelector('.catalog__filter-head .name span');

            filtListItems.forEach(li => {
                li.addEventListener('click', () => {
                    filtListItems.forEach(item => item.classList.remove('active'));

                    li.classList.add('active');
                    filtList.classList.remove('active');
                    filtHead.classList.remove('active');

                    filtValue.textContent = li.textContent.trim();
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const catalogList = document.querySelector('#catalog'),
              catalogBtn = document.querySelector('#catalog-more'),
              sorts = document.querySelectorAll('#sort-filter > li');

        let onPage,
            currPage,
            visible = catalogList.getAttribute('data-visible') ? +catalogList.getAttribute('data-visible').trim() : 12;

        const outItems = (reset = false) => {
            currPage = +catalogBtn.getAttribute('data-page');

            if (reset) currPage = 1;

            const data = new FormData;
            data.append('page', currPage);
            data.append('visible', visible);
            if (catalogList.getAttribute('data-cat'))
                data.append('cat', catalogList.getAttribute('data-cat'));

            onPage = currPage * visible;

            postData('/ajax/products.php', data)
            .then((res) => {
                if (reset) {
                    catalogList.innerHTML = res;
                    catalogBtn.style.display = '';
                } else
                    catalogList.innerHTML += res;

                catalogBtn.setAttribute('data-page', currPage + 1);
                    

                if (catalogList.querySelectorAll('.catalog__item').length < onPage) 
                    catalogBtn.style.display = 'none';

                if (!catalogList.innerHTML.trim()) 
                    catalogList.innerHTML = 'Товары не найдены';
            });
        }

        if (catalogList) {
            outItems();

            sorts.forEach((sort, i) => {
                sort.addEventListener('click', () => {
                    setCookie('sort-filter', i, 4);
                        
                    outItems(true);
                });
            });

            catalogBtn.addEventListener('click', () => {
                outItems();
            });
        }
    } catch (e) {
        console.log(e.stack);
    }
}

export default catalog;