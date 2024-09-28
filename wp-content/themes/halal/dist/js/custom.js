// Select Language
document.addEventListener('DOMContentLoaded', function() {
    const languageList = document.querySelector('.language');
    const languageItems = languageList.querySelectorAll('li');

    languageList.addEventListener('click', function(e) {
        const clickedItem = e.target.closest('li');
        if (!clickedItem) return;

        if (clickedItem.classList.contains('active')) {
            // If clicking the active language, toggle the open state
            languageList.classList.toggle('open');
            languageItems.forEach(item => {
                if (!item.classList.contains('active')) {
                    item.style.display = languageList.classList.contains('open') ? 'block' : 'none';
                }
            });
        } else {
            // If clicking a non-active language, switch to it
            languageItems.forEach(item => {
                item.classList.remove('active', 'open');
                item.style.display = 'none';
            });
            clickedItem.classList.add('active');
            clickedItem.style.display = 'block';
            languageList.classList.remove('open');
        }
    });
});
// Tab slider
document.addEventListener('DOMContentLoaded', function () {
    const dot = document.querySelectorAll('#list-dot li');
    const section = document.querySelectorAll('#list-slide .child');
    let activeIndex = 0;
    let slideInterval;

    // Initially activate the first element
    dot[0].classList.add('active');
    section[0].classList.add('active');

    // Click event for dots
    dot.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    // Function to set the active tab
    function setActiveTab(index) {
        clearInterval(slideInterval);
        dot.forEach(t => t.classList.remove('active'));
        section.forEach(p => p.classList.remove('active'));
        dot[index].classList.add('active');
        section[index].classList.add('active');
        activeIndex = index;

        // Check if the current slide has a video
        const currentSlide = section[activeIndex];
        const video = currentSlide.querySelector('video');

        if (video) {
            // If it's a video, wait for it to end before moving to the next slide
            video.currentTime = 0; // Reset video to start
            video.play();
            video.onended = () => {
                moveToNextSlide();
            };
        } else {
            // If it's an image, wait 5 seconds before moving to the next slide
            slideInterval = setTimeout(moveToNextSlide, 5000);
        }
    }

    // Function to move to the next slide
    function moveToNextSlide() {
        activeIndex = (activeIndex + 1) % dot.length;
        setActiveTab(activeIndex);
    }

    // Start the slider
    setActiveTab(0);
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
    const right = document.querySelectorAll('.tab-right');  // Changed this line

    tabs[0].classList.add('active');
    news[0].classList.add('active');
    right[0].classList.add('active');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        news.forEach(p => p.classList.remove('active'));
        right.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        news[activeIndex].classList.add('active');
        right[activeIndex].classList.add('active');
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
    const menuItems = document.querySelectorAll('.main-navigation .menu-items > .menu-item-has-children');

    menuItems.forEach(item => {
        const link = item.querySelector('a');
        const iconContainer = item.querySelector('.icon');
        
        // If icon container doesn't exist, create it
        if (!iconContainer) {
            const newIconContainer = document.createElement('div');
            newIconContainer.className = 'icon';
            
            const downIcon = document.createElement('div');
            downIcon.className = 'down';
            downIcon.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 7.26631C4.4701 7.02224 4.86583 7.02224 5.10991 7.26631L9.9373 12.0938C10.0187 12.1751 10.1505 12.1751 10.232 12.0938L15.0594 7.26631C15.3035 7.02223 15.6991 7.02223 15.9432 7.26631C16.1873 7.51039 16.1873 7.90611 15.9432 8.1502L11.1158 12.9776C10.5463 13.5471 9.62297 13.5471 9.05347 12.9776L4.22603 8.1502C3.98195 7.90612 3.98195 7.51039 4.22603 7.26631Z" fill="black"/>
                </svg>
            `;
            
            const upIcon = document.createElement('div');
            upIcon.className = 'up';
            upIcon.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 12.7337C4.4701 12.9778 4.86583 12.9778 5.10991 12.7337L9.9373 7.90618C10.0187 7.82491 10.1505 7.82491 10.232 7.90618L15.0594 12.7337C15.3035 12.9778 15.6991 12.9778 15.9432 12.7337C16.1873 12.4896 16.1873 12.0939 15.9432 11.8498L11.1158 7.02236C10.5463 6.45286 9.62297 6.45286 9.05347 7.02236L4.22603 11.8498C3.98195 12.0939 3.98195 12.4896 4.22603 12.7337Z" fill="black"/>
                </svg>
            `;
            
            newIconContainer.appendChild(downIcon);
            newIconContainer.appendChild(upIcon);
            
            item.insertBefore(newIconContainer, item.querySelector('.sub-menu'));
        }

        const icon = item.querySelector('.icon');

        icon.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleSubmenu(item);
        });

        link.addEventListener('click', function (e) {
            if (e.target === link) {
                // Allow the default link behavior
                return;
            }
            e.preventDefault();
            e.stopPropagation();
        });
    });

    function toggleSubmenu(item) {
        const link = item.querySelector('a');
        const subMenu = item.querySelector('.sub-menu');
        
        if (subMenu) {
            const isActive = link.classList.contains('active');
            
            // Close all other submenus
            menuItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.querySelector('a').classList.remove('active');
                    const otherSubMenu = otherItem.querySelector('.sub-menu');
                    if (otherSubMenu) {
                        otherSubMenu.classList.remove('show');
                    }
                    otherItem.querySelector('.icon .up').classList.remove('show');
                    otherItem.querySelector('.icon .down').classList.remove('show');
                }
            });

            // Toggle current submenu
            link.classList.toggle('active');
            subMenu.classList.toggle('show');
            item.querySelector('.icon .up').classList.toggle('show');
            item.querySelector('.icon .down').classList.toggle('show');
        }
    }

    // Close submenu when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.main-navigation')) {
            menuItems.forEach(item => {
                const link = item.querySelector('a');
                link.classList.remove('active');
                const subMenu = item.querySelector('.sub-menu');
                if (subMenu) {
                    subMenu.classList.remove('show');
                }
                item.querySelector('.icon .up').classList.remove('show');
                item.querySelector('.icon .down').classList.remove('show');
            });
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
