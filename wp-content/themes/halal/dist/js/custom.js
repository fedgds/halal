// Tab slider
document.addEventListener('DOMContentLoaded', function () {
    const dot = document.querySelectorAll('#list-dot li');
    const section = document.querySelectorAll('#list-slide .child');
    let currentIndex = 0;

    function setActiveTab(activeIndex) {
        dot.forEach(t => t.classList.remove('active'));
        section.forEach(p => p.classList.remove('active'));
        dot[activeIndex].classList.add('active');
        section[activeIndex].classList.add('active');
    }

    function autoSwitchTab() {
        currentIndex = (currentIndex + 1) % dot.length;
        setActiveTab(currentIndex);
    }

    // Thiết lập tab đầu tiên là active
    setActiveTab(0);

    // Thêm sự kiện click cho mỗi dot
    dot.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            currentIndex = index;
            setActiveTab(currentIndex);
        });
    });

    // Tự động chuyển tab mỗi 3 giây
    setInterval(autoSwitchTab, 3000);
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
// Next and Prev list training
document.getElementById('next-train').addEventListener('click', function() {
    const listTraining = document.querySelector('.list-training');
    listTraining.scrollBy({
        left: listTraining.clientWidth,
        behavior: 'smooth'
    });
});

document.getElementById('prev-train').addEventListener('click', function() {
    const listTraining = document.querySelector('.list-training');
    listTraining.scrollBy({
        left: -listTraining.clientWidth,
        behavior: 'smooth'
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
document.addEventListener('DOMContentLoaded', function () {
    const downMenu = document.querySelector('#down-menu-mobile');
    const dropMenu = document.querySelector('#drop-menu-mobile');
    const subMenu = document.getElementById('sub-menu-mobile');

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
// Tab list halal nqi
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

// Tab halal nqi
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#list-tab-nqi li');
    const nqi = document.querySelectorAll('#list-nqi .child');

    tabs[0].classList.add('active');
    nqi[0].classList.add('active');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        nqi.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        nqi[activeIndex].classList.add('active');
    }
});

