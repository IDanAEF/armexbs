/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/es6/blocks/catalog.js":
/*!**************************************!*\
  !*** ./assets/es6/blocks/catalog.js ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
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
  function getCookie(name) {
    let json = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    if (!name) return undefined;
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()\[\]\\\/+^])/g, '\\$1') + "=([^;]*)"));
    if (matches) {
      let res = decodeURIComponent(matches[1]);
      if (json) {
        try {
          return JSON.parse(res);
        } catch (e) {}
      }
      return res;
    }
    return undefined;
  }
  function setCookie(name, value, hours) {
    var expires;
    if (hours || hours === 0) {
      var date = new Date();
      date.setTime(date.getTime() + hours * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    } else {
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
    const outItems = function () {
      let reset = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      currPage = +catalogBtn.getAttribute('data-page');
      if (reset) currPage = 1;
      const data = new FormData();
      data.append('page', currPage);
      data.append('visible', visible);
      if (catalogList.getAttribute('data-cat')) data.append('cat', catalogList.getAttribute('data-cat'));
      onPage = currPage * visible;
      postData('/ajax/products.php', data).then(res => {
        if (reset) {
          catalogList.innerHTML = res;
          catalogBtn.style.display = '';
        } else catalogList.innerHTML += res;
        catalogBtn.setAttribute('data-page', currPage + 1);
        if (catalogList.querySelectorAll('.catalog__item').length < onPage) catalogBtn.style.display = 'none';
        if (!catalogList.innerHTML.trim()) catalogList.innerHTML = 'Товары не найдены';
      });
    };
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
};
/* harmony default export */ __webpack_exports__["default"] = (catalog);

/***/ }),

/***/ "./assets/es6/blocks/forms.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/forms.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
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
        successModal = document.querySelector('.success-modal[data-success="' + form.getAttribute('data-success') + '"]');
      inputs.forEach(input => {
        let placehold = input.placeholder;
        input.addEventListener('focus', () => {
          if (input.classList.contains('placeholder-hide')) input.placeholder = '';
        });
        input.addEventListener('blur', () => {
          if (input.classList.contains('placeholder-hide')) input.placeholder = placehold;
        });
      });
      form.addEventListener('submit', e => {
        e.preventDefault();
        const formData = new FormData(form);
        postData(form.action, formData).then(res => {
          successModal.classList.add('active');
        });
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (forms);

/***/ }),

/***/ "./assets/es6/blocks/gallery.js":
/*!**************************************!*\
  !*** ./assets/es6/blocks/gallery.js ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
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
      if (index == 0) galleryLeft.style.display = 'none';else galleryLeft.style.display = '';
      if (index == galleryItems.length - 1) galleryRight.style.display = 'none';else galleryRight.style.display = '';
    };
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
        if (btnNext.classList.contains('gallery-items')) btnNext.querySelector('.gallery-item').click();
      });
    });
    galleryOverlay.addEventListener('click', e => {
      if (e.target == galleryOverlay || e.target == galleryClose) {
        galleryImage.src = '';
        galleryOverlay.classList.remove('active');
      }
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (gallery);

/***/ }),

/***/ "./assets/es6/blocks/mask.js":
/*!***********************************!*\
  !*** ./assets/es6/blocks/mask.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const mask = selector => {
  let setCursorPosition = (pos, elem) => {
    elem.focus();
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      let range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };
  function createMask(event) {
    let matrix = '+7 (___) ___-__-__',
      i = 0,
      def = matrix.replace(/\D/g, ''),
      val = this.value.replace(/\D/g, '');
    if (def.length >= val.length) {
      val = def;
    }
    this.value = matrix.replace(/./g, function (a) {
      return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a;
    });
    if (event.type === 'blur') {
      if (this.value.length == 2) {
        this.value = '';
      }
    } else {
      setCursorPosition(this.value.length, this);
    }
  }
  let inputs = document.querySelectorAll(selector);
  inputs.forEach(input => {
    input.addEventListener('input', createMask);
    input.addEventListener('focus', createMask);
    input.addEventListener('blur', createMask);
  });
};
/* harmony default export */ __webpack_exports__["default"] = (mask);

/***/ }),

/***/ "./assets/es6/blocks/other.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/other.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const other = () => {
  function getCookie(name) {
    let json = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    if (!name) return undefined;
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()\[\]\\\/+^])/g, '\\$1') + "=([^;]*)"));
    if (matches) {
      let res = decodeURIComponent(matches[1]);
      if (json) {
        try {
          return JSON.parse(res);
        } catch (e) {}
      }
      return res;
    }
    return undefined;
  }
  function setCookie(name, value, hours) {
    var expires;
    if (hours || hours === 0) {
      var date = new Date();
      date.setTime(date.getTime() + hours * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    } else {
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
    searchBtn.addEventListener('click', e => {
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
    document.documentElement.addEventListener('click', e => {
      if (e.target.classList.contains('menu-item-has-children') || e.target.parentElement.classList.contains('menu-item-has-children')) {
        let currElem = e.target.classList.contains('menu-item-has-children') ? e.target : e.target.parentElement;
        if (!currElem.classList.contains('active')) menus.forEach(menu => menu.classList.remove('active'));
        currElem.classList.toggle('active');
      } else if (!e.target.closest('.menu-item-has-children') && !e.target.parentElement.classList.contains('menu-item-has-children')) menus.forEach(menu => menu.classList.remove('active'));
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
    document.documentElement.addEventListener('click', e => {
      if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
        if (e.target.getAttribute('data-content')) document.querySelector('.body-click-content[data-content="' + e.target.getAttribute('data-content') + '"]').classList.toggle('active');else e.target.parentElement.classList.remove('active');
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
            trTd.style.width = 75 / (firstTrTds.length - 1) + '%';
          });
          tdHeight = td.offsetHeight + 5 + 'px';
          td.parentElement.style.height = tdHeight;
          td.style.height = tdHeight;
          td.classList.add('abs');
        });
      });
    };
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
    };
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
};
/* harmony default export */ __webpack_exports__["default"] = (other);

/***/ }),

/***/ "./assets/es6/blocks/scrolling.js":
/*!****************************************!*\
  !*** ./assets/es6/blocks/scrolling.js ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const scrolling = () => {
  try {
    const links = document.querySelectorAll('[href^="#"]'),
      speed = 0.3;
    const goingTo = hash => {
      let widthTop = document.documentElement.scrollTop,
        toBlock = document.querySelector(hash).getBoundingClientRect().top - 110,
        start = null;
      requestAnimationFrame(step);
      function step(time) {
        if (start === null) {
          start = time;
        }
        let progress = time - start,
          r = toBlock < 0 ? Math.max(widthTop - progress / speed, widthTop + toBlock) : Math.min(widthTop + progress / speed, widthTop + toBlock);
        document.documentElement.scrollTo(0, r);
        if (r != widthTop + toBlock) {
          requestAnimationFrame(step);
        } else {
          location.hash = hash;
        }
      }
    };
    if (window.location.hash) goingTo(window.location.hash);
    links.forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        goingTo(this.hash);
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (scrolling);

/***/ }),

/***/ "./assets/es6/blocks/simpleSlider.js":
/*!*******************************************!*\
  !*** ./assets/es6/blocks/simpleSlider.js ***!
  \*******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const simpleSlider = () => {
  try {
    //promo slider example
    const simpleSlider = document.querySelectorAll('.simple-slider');
    simpleSlider.forEach(slider => {
      const sliderItems = slider.querySelectorAll('.simple-slider-item'),
        sliderDots = slider.querySelector('.simple-slider-dots');
      let count = sliderItems.length,
        curr = 0;
      for (let i = 0; i < count; i++) {
        sliderDots.innerHTML += '<span></span>';
      }
      const sliderDotsItems = sliderDots.querySelectorAll('span');
      const setSlide = () => {
        sliderItems.forEach(item => item.classList.remove('active'));
        sliderDotsItems.forEach(item => item.classList.remove('active'));
        sliderItems[curr].classList.add('active');
        sliderDotsItems[curr].classList.add('active');
      };
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
};
/* harmony default export */ __webpack_exports__["default"] = (simpleSlider);

/***/ }),

/***/ "./assets/es6/blocks/sitemapList.js":
/*!******************************************!*\
  !*** ./assets/es6/blocks/sitemapList.js ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
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
    };
    const getSubHeight = items => {
      let height = 0;
      items.forEach(item => {
        height += item.offsetHeight;
      });
      return height;
    };
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
};
/* harmony default export */ __webpack_exports__["default"] = (sitemaplist);

/***/ }),

/***/ "./assets/es6/blocks/slider.js":
/*!*************************************!*\
  !*** ./assets/es6/blocks/slider.js ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
const slider = () => {
  try {
    const sliderField = document.querySelectorAll('.slider');
    sliderField.forEach(slider => {
      let sliderTrack = slider.querySelector('.slider-track'),
        sliderList = slider.querySelector('.slider-list'),
        slides = slider.querySelectorAll('.slider-item'),
        sliderDots = slider.querySelector('.slider-dots'),
        sliderRight = slider.querySelector('.slider-right'),
        sliderLeft = slider.querySelector('.slider-left'),
        slideWidth = 0,
        slideIndex = 0,
        slidesCount = slides.length;
      let sliderDotsItems;
      const getVisCount = () => {
        if (window.innerWidth <= 576 && slider.getAttribute('data-mob-vis')) {
          return +slider.getAttribute('data-mob-vis');
        } else if (window.innerWidth <= 768 && slider.getAttribute('data-tablet-vis')) {
          return +slider.getAttribute('data-tablet-vis');
        } else if (window.innerWidth <= 1200 && slider.getAttribute('data-lap-vis')) {
          return +slider.getAttribute('data-lap-vis');
        } else if (slider.getAttribute('data-pc-vis')) {
          return +slider.getAttribute('data-pc-vis');
        }
        return 1;
      };
      const slide = () => {
        sliderDotsItems && sliderDotsItems.forEach(item => item.classList.remove('active'));
        sliderDotsItems && sliderDotsItems[slideIndex].classList.add('active');
        sliderTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
      };
      const moveRight = () => {
        slideIndex + getVisCount() >= slidesCount ? slideIndex = 0 : slideIndex++;
        slide();
      };
      const moveLeft = () => {
        slideIndex <= 0 ? slideIndex = slidesCount - getVisCount() : slideIndex--;
        slide();
      };
      const setSlideWidth = () => {
        slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
      };
      const setDots = () => {
        if (!sliderDotsItems && sliderDots) {
          for (let i = 0; i < slidesCount; i++) {
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
      };
      setDots();
      sliderTrack.style.transition = 'transform 0.5s ease 0s';
      setSlideWidth();
      let startPos = 0;
      sliderList.addEventListener('touchstart', e => {
        if (slider.classList.contains('mobile-only') && window.innerWidth > 576) return;
        startPos = e.changedTouches[0].screenX;
      });
      sliderList.addEventListener('touchend', e => {
        if (slider.classList.contains('mobile-only') && window.innerWidth > 576) return;
        if (startPos - e.changedTouches[0].screenX > 50) {
          moveRight();
        } else if (startPos - e.changedTouches[0].screenX < -50) {
          moveLeft();
        }
      });
      sliderRight.addEventListener('click', moveRight);
      sliderLeft.addEventListener('click', moveLeft);
      window.addEventListener("resize", () => {
        setSlideWidth();
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (slider);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!****************************!*\
  !*** ./assets/es6/main.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_mask__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/mask */ "./assets/es6/blocks/mask.js");
/* harmony import */ var _blocks_slider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blocks/slider */ "./assets/es6/blocks/slider.js");
/* harmony import */ var _blocks_simpleSlider__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./blocks/simpleSlider */ "./assets/es6/blocks/simpleSlider.js");
/* harmony import */ var _blocks_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./blocks/forms */ "./assets/es6/blocks/forms.js");
/* harmony import */ var _blocks_catalog__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./blocks/catalog */ "./assets/es6/blocks/catalog.js");
/* harmony import */ var _blocks_scrolling__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./blocks/scrolling */ "./assets/es6/blocks/scrolling.js");
/* harmony import */ var _blocks_sitemapList__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./blocks/sitemapList */ "./assets/es6/blocks/sitemapList.js");
/* harmony import */ var _blocks_gallery__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./blocks/gallery */ "./assets/es6/blocks/gallery.js");
/* harmony import */ var _blocks_other__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./blocks/other */ "./assets/es6/blocks/other.js");









'use strict';
window.addEventListener('DOMContentLoaded', () => {
  (0,_blocks_mask__WEBPACK_IMPORTED_MODULE_0__["default"])('input[type="tel"]');
  (0,_blocks_slider__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_blocks_simpleSlider__WEBPACK_IMPORTED_MODULE_2__["default"])();
  (0,_blocks_forms__WEBPACK_IMPORTED_MODULE_3__["default"])();
  (0,_blocks_catalog__WEBPACK_IMPORTED_MODULE_4__["default"])();
  (0,_blocks_scrolling__WEBPACK_IMPORTED_MODULE_5__["default"])();
  (0,_blocks_sitemapList__WEBPACK_IMPORTED_MODULE_6__["default"])();
  (0,_blocks_gallery__WEBPACK_IMPORTED_MODULE_7__["default"])();
  (0,_blocks_other__WEBPACK_IMPORTED_MODULE_8__["default"])();
});
}();
/******/ })()
;
//# sourceMappingURL=script.js.map