// Подготовка документа
document.addEventListener('DOMContentLoaded', function () {
    // Для скроллинга
    const scrollspy = document.querySelectorAll('.scrollspy');
    const scrollspyInit = M.ScrollSpy.init(scrollspy, {throttle: 10000, scrollOffset: 64});

    // Меню при мобилке
    const sidenav = document.querySelectorAll('.sidenav');
    const sidenavInit = M.Sidenav.init(sidenav, {});

    // Parallax
    const parallax = document.querySelectorAll('.parallax');
    const parallaxInit = M.Parallax.init(parallax, {});

    // Tooltip
    const tooltipped = document.querySelectorAll('.tooltipped');
    var tooltippedInit = M.Tooltip.init(tooltipped, {});

    // Gallery
    lightGallery(document.getElementById('lightgallery'));

    // Инициализация WOWjs
    new WOW().init();

    // Показывать ли "ракету"
    showToTop();
});

// Вешаем событие на скрол
document.addEventListener('scroll', function () {
    // Показ "ракеты"
    showToTop();
});

/**
 * Показывает\скрывает ракету
 */
function showToTop() {
    // Получаем элемент главной страницы тайтл
    const appTitle = document.getElementsByClassName('app-title')[0];
    // Или главная страница или подробная
    let heightTitle;
    if (appTitle) {
        // Получаем высоту первой секции
        heightTitle = appTitle.offsetHeight;
        // Получаем эллемент к верху
        const toTopButtonElement = document.getElementById('to-top-button');
        // Если высота прокрутки больше чем высота перовй секции, то покажем
        if (window.scrollY > heightTitle / 2) {
            toTopButtonElement.style.opacity = '1';
        } else {
            toTopButtonElement.style.opacity = '0';
        }
    }
}
