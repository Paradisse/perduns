"use strict";

// Горизонтальный скролл
(function() {
    function scrollHorizontally(e) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        document.documentElement.scrollLeft -= (delta*100);
        document.body.scrollLeft -= (delta*100);
        e.preventDefault();
    }
    if (window.addEventListener) {
        // IE9, Chrome, Safari, Opera
        window.addEventListener("mousewheel", scrollHorizontally, { passive: false });
        // Firefox
        window.addEventListener("DOMMouseScroll", scrollHorizontally, { passive: false });
    } else {
        // IE 6/7/8
        window.attachEvent("onmousewheel", scrollHorizontally);
    }
})();



// Скролл до середины страницы при загрузке
// $(document).ready(function(){
//     document.getElementById('middle').scrollIntoView({ inline: 'center' });
// });
