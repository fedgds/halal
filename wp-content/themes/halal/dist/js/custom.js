// Tab slider
document.addEventListener('DOMContentLoaded', function () {
    const dot = document.querySelectorAll('#list-dot li');
    const section = document.querySelectorAll('#list-slide .child');

    dot[0].classList.add('active');
    section[0].classList.add('active');

    dot.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        dot.forEach(t => t.classList.remove('active'));
        section.forEach(p => p.classList.remove('active'));

        dot[activeIndex].classList.add('active');
        section[activeIndex].classList.add('active');
    }
});
// Modal menu header
document.addEventListener('DOMContentLoaded', function () {
    const openMenu = document.querySelector('#open-menu-header');
    const closeMenu = document.querySelector('#close-menu-header');
    const menuHeader = document.getElementById('menuHeader');
    const backdrop = document.getElementById('backdrop-menu');

    function showMenu() {
        menuHeader.classList.add('show');
        backdrop.classList.add('show');
    }

    function hideMenu() {
        menuHeader.classList.remove('show');
        backdrop.classList.remove('show');
    }

    openMenu.addEventListener('click', showMenu);

    closeMenu.addEventListener('click', hideMenu);

    backdrop.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!menuHeader.contains(event.target) && !openMenu.contains(event.target)) {
            hideMenu();
        }
    });
});

// Drop sub menu account
document.addEventListener('DOMContentLoaded', function () {
    const downMenu = document.querySelector('#down-menu-header');
    const dropMenu = document.querySelector('#drop-menu-header');
    const subMenu = document.getElementById('sub-menu');

    function showMenu() {
        subMenu.classList.add('show');
        downMenu.classList.add('show');
        dropMenu.classList.add('show');
    }

    function hideMenu() {
        subMenu.classList.remove('show');
        dropMenu.classList.remove('show');
        downMenu.classList.remove('show');
    }

    downMenu.addEventListener('click', showMenu);

    dropMenu.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!subMenu.contains(event.target) && !downMenu.contains(event.target)) {
            hideMenu();
        }
    });
});
// Tab list partner
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#list-tab-section-4 li');
    const section = document.querySelectorAll('#tab-section-4 .child');

    tabs[0].classList.add('active');
    section[0].classList.add('active');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        section.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        section[activeIndex].classList.add('active');
    }
});
// Tab list news
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#list-tab-news li');
    const news = document.querySelectorAll('#tab-news .list-news');

    tabs[0].classList.add('active');
    news[0].classList.add('active');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        news.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        news[activeIndex].classList.add('active');
    }
});
// Tab tập san
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#tab-halal li');
    const listHalal = document.querySelectorAll('#list-halal');

    tabs[0].classList.add('active');
    listHalal[0].classList.add('active');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        listHalal.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        listHalal[activeIndex].classList.add('active');
    }
});
