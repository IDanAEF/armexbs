import mask from "./blocks/mask";
import slider from "./blocks/slider";
import simpleSlider from "./blocks/simpleSlider";
import forms from "./blocks/forms";
import catalog from "./blocks/catalog";
import scrolling from "./blocks/scrolling";
import sitemaplist from "./blocks/sitemapList";
import gallery from "./blocks/gallery";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    slider();
    simpleSlider();
    forms();
    catalog();
    scrolling();
    sitemaplist();
    gallery();
    other();
});