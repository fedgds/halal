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
// fade-in
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Ngừng theo dõi sau khi phần tử xuất hiện
            }
        });
    });

    elements.forEach(element => {
        observer.observe(element);
    });
});
// Tab list halal nqi
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#list-tab-section-3 li');
    const section = document.querySelectorAll('#tab-section-3 .child');

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

// Question and answer contact page
document.addEventListener('DOMContentLoaded', function () {
    const children = document.querySelectorAll('.child-faq');

    children.forEach(child => {
        const openAnswer = child.querySelector('.plus-icon');
        const closeAnswer = child.querySelector('.minus-icon');
        const answer = child.querySelector('#answer-question');
        const title = child.querySelector('.title');

        function showAnswer() {
            answer.classList.add('show');
            openAnswer.classList.add('hide');
            closeAnswer.classList.add('show');
            title.classList.add('show');
        }

        function hideAnswer() {
            answer.classList.remove('show');
            openAnswer.classList.remove('hide');
            closeAnswer.classList.remove('show');
            title.classList.remove('show');
        }

        openAnswer.addEventListener('click', showAnswer);
        closeAnswer.addEventListener('click', hideAnswer);
    });
});
// Drop sub menu account
document.addEventListener('DOMContentLoaded', function () {
    const downMenu_1 = document.querySelector('#down-menu-header-1');
    const dropMenu_1 = document.querySelector('#drop-menu-header-1');
    const subMenu_1 = document.getElementById('sub-menu-1');

    function showMenu() {
        subMenu_1.classList.add('show');
        downMenu_1.classList.add('show');
        dropMenu_1.classList.add('show');
    }

    function hideMenu() {
        subMenu_1.classList.remove('show');
        dropMenu_1.classList.remove('show');
        downMenu_1.classList.remove('show');
    }

    downMenu_1.addEventListener('click', showMenu);

    dropMenu_1.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!subMenu_1.contains(event.target) && !downMenu_1.contains(event.target)) {
            hideMenu();
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const downMenu_2 = document.querySelector('#down-menu-header-2');
    const dropMenu_2 = document.querySelector('#drop-menu-header-2');
    const subMenu_2 = document.getElementById('sub-menu-2');

    function showMenu() {
        subMenu_2.classList.add('show');
        downMenu_2.classList.add('show');
        dropMenu_2.classList.add('show');
    }

    function hideMenu() {
        subMenu_2.classList.remove('show');
        dropMenu_2.classList.remove('show');
        downMenu_2.classList.remove('show');
    }

    downMenu_2.addEventListener('click', showMenu);

    dropMenu_2.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!subMenu_2.contains(event.target) && !downMenu_2.contains(event.target)) {
            hideMenu();
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const downMenu_1 = document.querySelector('#down-menu-mobile-1');
    const dropMenu_1 = document.querySelector('#drop-menu-mobile-1');
    const subMenu_1 = document.getElementById('sub-menu-mobile-1');

    function showMenu() {
        subMenu_1.classList.add('show');
        downMenu_1.classList.add('show');
        dropMenu_1.classList.add('show');
    }

    function hideMenu() {
        subMenu_1.classList.remove('show');
        dropMenu_1.classList.remove('show');
        downMenu_1.classList.remove('show');
    }

    downMenu_1.addEventListener('click', showMenu);

    dropMenu_1.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!subMenu_1.contains(event.target) && !downMenu_1.contains(event.target)) {
            hideMenu();
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const downMenu_2 = document.querySelector('#down-menu-mobile-2');
    const dropMenu_2 = document.querySelector('#drop-menu-mobile-2');
    const subMenu_2 = document.getElementById('sub-menu-mobile-2');

    function showMenu() {
        subMenu_2.classList.add('show');
        downMenu_2.classList.add('show');
        dropMenu_2.classList.add('show');
    }

    function hideMenu() {
        subMenu_2.classList.remove('show');
        dropMenu_2.classList.remove('show');
        downMenu_2.classList.remove('show');
    }

    downMenu_2.addEventListener('click', showMenu);

    dropMenu_2.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!subMenu_2.contains(event.target) && !downMenu_2.contains(event.target)) {
            hideMenu();
        }
    });
});