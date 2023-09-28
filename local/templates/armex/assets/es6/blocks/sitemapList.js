const sitemaplist = () => {
    try {
        //sitemaps list
        const parents = document.querySelectorAll('.sitemaps__row.parent');

        const setHeightForPrev = (item, height) => {
            let prev = item.parentElement.closest('.sitemaps__row-sub');

            if (prev) {
                let nextHeight = +prev.getAttribute('data-height') + height;

                prev.style.maxHeight = nextHeight + 'px';
                prev.setAttribute('data-height', nextHeight);

                setHeightForPrev(prev, height);
            }

            return;
        }

        const getSubHeight = (items) => {
            let height = 0;

            items.forEach(item => {
                height += item.offsetHeight;
            });

            return height;
        }

        parents.forEach(parent => {
            parent.addEventListener('click', () => {
                const subList = parent.nextElementSibling,
                      subHeight = getSubHeight(subList.querySelectorAll('.sitemaps__row'));

                parent.classList.toggle('active');
                subList.classList.toggle('active');

                if (parent.classList.contains('active')) {
                    subList.style.maxHeight = subHeight + 'px';
                    subList.setAttribute('data-height', subHeight);

                    setHeightForPrev(subList, subHeight);
                } else {
                    subList.style.maxHeight = '0px';
                    subList.setAttribute('data-height', 0);

                    subList.querySelectorAll('.sitemaps__row.parent').forEach(item => {
                        let nextSub = item.nextElementSibling;

                        item.classList.remove('active');
                        nextSub.classList.remove('active');

                        nextSub.style.maxHeight = '0px';
                        nextSub.setAttribute('data-height', 0);
                    });
                }
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default sitemaplist;