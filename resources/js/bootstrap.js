import IMask from 'imask';

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

    // Feature Discovery
    var featureDiscovery = document.getElementById('form-section');
    var featureDiscoveryInit = M.TapTarget.init(featureDiscovery, {});
    var formMenu = document.getElementById('form-menu');
    if (formMenu) {
        formMenu.addEventListener('click', function () {
            featureDiscoveryInit.open();
        });
    }

    // Gallery
    lightGallery(document.getElementById('lightgallery'));

    // Инициализация WOWjs
    new WOW().init();

    // Показывать ли "ракету"
    showToTop();

    // Управление формой обратной связи
    formInit(featureDiscoveryInit)
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

/**
 * Форма обратной связи
 */
function formInit(featureDiscoveryInit) {
    // Если есть форма
    if (featureDiscoveryInit) {
        // Маска на телефоный номер
        var element = document.getElementById('form-input-phone');
        var mask = IMask(element, {
            mask: '+7(000)000-00-00',
        });
        mask.value = "+7(";

        // Сабмит формы
        var form = document.getElementById('form-input');
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Получаем значения
            var name = document.getElementById('form-input-name').value;
            var phone = document.getElementById('form-input-phone').value;
            var text = document.getElementById('form-input-text').value;

            // Закроем форму
            featureDiscoveryInit.close();

            // Отправляем на сервак
            fetch('form', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': laravelToken,
                },
                body: JSON.stringify({name, phone, text})
            }).then(e => {
                // Преобразуем ответ в json
                return e.json();
            }).then(e => {
                // Дизайблим кнопку отправки
                var button = document.getElementById('form-submit');
                button.classList.add('disabled');
                // Кинем сообщение
                M.toast({html: 'Сообщение отправленно. В ближайшее время с вами свяжутся.', displayLength: 8000})
            });
        })
    }
}
