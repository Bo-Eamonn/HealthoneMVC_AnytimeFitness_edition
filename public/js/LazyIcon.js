//define function to load css
var loadCss = function () {
    var cssLink = document.createElement('link');
    cssLink.rel = 'stylesheet';
    cssLink.href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css';
    var head = document.getElementsByTagName('head')[0];
    head.parentNode.insertBefore(cssLink, head);
};

//call function on window load
window.addEventListener('load', loadCss);