import mask from "./blocks/mask";
//import slider from "./blocks/slider";
import mobileSlider from "./blocks/mobileSlider";
import simpleSlider from "./blocks/simpleSlider";
import forms from "./blocks/forms";
import catalog from "./blocks/catalog";
import scrolling from "./blocks/scrolling";
import sitemaplist from "./blocks/sitemapList";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    //slider();
    mobileSlider();
    simpleSlider();
    forms();
    catalog();
    scrolling();
    sitemaplist();
    other();
});