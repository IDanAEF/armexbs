const other = () => {
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
    function deleteCookie(name) {
        setCookie(name, null, 0);
    }

    try {
        //header search
        const searchForm = document.querySelector('.header__search'),
              menuList = document.querySelector('.header__menu-list'),
              searchBtn = searchForm.querySelector('button'),
              searchInput = searchForm.querySelector('input');
        
        searchBtn.addEventListener('click', (e) => {
            if (window.innerWidth < 992) return;

            if (!searchForm.classList.contains('active')) {
                e.preventDefault();

                searchForm.classList.add('active');
                menuList.classList.add('search-open');
                searchInput.focus();
            }
        });

        searchInput.addEventListener('blur', () => {
            searchForm.classList.remove('active');
            menuList.classList.remove('search-open');
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //header sub-menus
        const menus = document.querySelectorAll('.menu-item-has-children');

        document.documentElement.addEventListener('click', (e) => {
            if (e.target.classList.contains('menu-item-has-children') || e.target.parentElement.classList.contains('menu-item-has-children')) {
                let currElem = e.target.classList.contains('menu-item-has-children') ? e.target : e.target.parentElement;
                
                if (!currElem.classList.contains('active')) menus.forEach(menu => menu.classList.remove('active'));

                currElem.classList.toggle('active');
            } else if (!e.target.closest('.menu-item-has-children') && !e.target.parentElement.classList.contains('menu-item-has-children'))
                menus.forEach(menu => menu.classList.remove('active'));
        });

        menus.forEach(menu => {
            let inPoint = false;

            menu.addEventListener('mouseenter', () => {
                if (window.innerWidth <= 992) return;
                menus.forEach(menu => menu.classList.remove('active'));

                menu.classList.add('active');
                inPoint = true;
            });
            menu.addEventListener('mouseleave', () => {
                if (window.innerWidth <= 992) return;
                inPoint = false;

                setTimeout(() => {
                    if (!inPoint) menu.classList.remove('active');
                }, 5000);
            });
            menu.querySelector('.sub-menu').addEventListener('mouseenter', () => {
                if (window.innerWidth <= 992) return;
                inPoint = true;
            });
            menu.querySelector('.sub-menu').addEventListener('mouseleave', () => {
                if (window.innerWidth <= 992) return;
                inPoint = false;

                menu.classList.remove('active');
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //global hide-show blocks
        const bodyClickContent = document.querySelectorAll('.body-click-content'),
              bodyClickTarget = document.querySelectorAll('.body-click-target');

        document.documentElement.addEventListener('click', (e) => {
            if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
                if (e.target.getAttribute('data-content')) 
                    document.querySelector('.body-click-content[data-content="'+e.target.getAttribute('data-content')+'"]').classList.toggle('active');
                else 
                    e.target.parentElement.classList.remove('active');

                !e.target.classList.contains('not-active') ? e.target.classList.toggle('active') : '';
            } else if (!e.target.closest('.body-click-content')) {
                bodyClickContent.forEach(item => item.classList.remove('active'));
                bodyClickTarget.forEach(item => !item.classList.contains('not-active') ? item.classList.remove('active') : '');
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //cookies agree
        const cookiesModalBtn = document.querySelector('.cookies-modal button');

        if (!getCookie('cookie_agree')) {
            cookiesModalBtn.parentElement.classList.add('active');

            cookiesModalBtn.addEventListener('click', () => {
                setCookie('cookie_agree', 1, 1000);

                cookiesModalBtn.parentElement.classList.remove('active');
            });
        }
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //rent pays
        const rentItems = document.querySelectorAll('.rent__plans-item'),
              priceCols = document.querySelectorAll('.payment-rent');

        rentItems.forEach(rent => {
            rent.addEventListener('click', () => {
                rentItems.forEach(item => item.classList.remove('active'));

                rent.classList.add('active');

                priceCols[0].textContent = rent.getAttribute('data-pay1').trim() + ' ₽/мес';
                priceCols[1].textContent = rent.getAttribute('data-pay2').trim() + ' ₽/мес';
                priceCols[2].textContent = rent.getAttribute('data-pay3').trim() + ' ₽/мес';
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //tables 
        const tables = document.querySelectorAll('.scrollable-table table');

        const setAbs = () => {
            tables.forEach(table => {
                const firstTds = table.querySelectorAll('tr td:first-child'),
                      firstTrTds = table.querySelectorAll('tr:first-child td');

                let tdHeight;

                firstTds[0].setAttribute('data-width', firstTds[0].style.width);
                
                firstTds.forEach(td => {
                    if (td.getAttribute('colspan')) {
                        td.setAttribute('data-colspan', td.getAttribute('colspan'));

                        td.removeAttribute('colspan');
                    }


                    td.style.width = '158px';

                    firstTrTds.forEach((trTd, i) => {
                        if (i == 0) return;

                        trTd.setAttribute('data-width', trTd.style.width);

                        trTd.style.width = (75 / (firstTrTds.length - 1))+'%';
                    });

                    tdHeight = (td.offsetHeight + 5)+'px';

                    td.parentElement.style.height = tdHeight;
                    td.style.height = tdHeight;
                    td.classList.add('abs');
                });
            });
        }

        const resetAbs = () => {
            tables.forEach(table => {
                const firstTds = table.querySelectorAll('tr td:first-child'),
                      firstTrTds = table.querySelectorAll('tr:first-child td');
                
                firstTds.forEach(td => {
                    td.style.width = '';
                    td.parentElement.style.height = '';
                    td.style.height = '';
                    td.classList.remove('abs');

                    if (td.getAttribute('data-colspan')) {
                        td.setAttribute('colspan', td.getAttribute('data-colspan'));

                        td.removeAttribute('data-colspan');
                    }

                    if (td.getAttribute('data-width')) {
                        td.style.width = td.getAttribute('data-width');

                        td.removeAttribute('data-width');
                    }

                    firstTrTds.forEach((trTd, i) => {
                        if (i == 0) return;

                        if (trTd.getAttribute('data-width')) {
                            trTd.style.width = trTd.getAttribute('data-width');
    
                            trTd.removeAttribute('data-width');
                        }
                    });
                });
            });
        }

        let isSet = false;
        
        if (window.innerWidth <= 768) {
            isSet = true;
            setAbs();
        }

        if (tables) {
            window.addEventListener('resize', () => {
                if (window.innerWidth <= 768 && !isSet) {
                    isSet = true;
                    setAbs();
                } else if (window.innerWidth > 768 && isSet) {
                    isSet = false;
                    resetAbs();
                }
            });
        }
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;