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
// Drop down menu account
document.addEventListener('DOMContentLoaded', function () {
    const downMenu = document.querySelector('#down-menu-header');
    const dropMenu = document.querySelector('#drop-menu-header');
    const account = document.getElementById('account');

    function showMenu() {
        account.classList.add('show');
        downMenu.classList.add('show');
        dropMenu.classList.add('show');
    }

    function hideMenu() {
        account.classList.remove('show');
        dropMenu.classList.remove('show');
        downMenu.classList.remove('show');
    }

    downMenu.addEventListener('click', showMenu);

    dropMenu.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!account.contains(event.target) && !downMenu.contains(event.target)) {
            hideMenu();
        }
    });
});

// End modal menu header

// Tab navigation about
document.addEventListener('DOMContentLoaded', function () {
    const tabMission = document.getElementById('tab-mission');
    const tabRole = document.getElementById('tab-role');
    const tabMainActivities = document.getElementById('tab-main-activities');

    const mission = document.getElementById('mission');
    const role = document.getElementById('role');
    const mainActivities = document.getElementById('main-activities');

    tabMission.addEventListener('click', () => {
        setActiveTab(tabMission, mission);
    });

    tabRole.addEventListener('click', () => {
        setActiveTab(tabRole, role);
    });

    tabMainActivities.addEventListener('click', () => {
        setActiveTab(tabMainActivities, mainActivities);
    });

    function setActiveTab(tab, content) {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.nav-about li').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.bottom').forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        content.classList.add('active');
    }
});
// End tab navigation about

// Modal forgot password page
document.addEventListener('DOMContentLoaded', function () {
    const openFormForgotPassword = document.querySelector('#open-modal-forgot-password');
    const closeFormForgotPassword = document.querySelector('#close-modal-forgot-password');
    const forgotPasswordModal = document.getElementById('forgotPasswordModal');
    const backdrop = document.getElementById('backdrop-forgot-password');

    function showMenu() {
        forgotPasswordModal.classList.add('show');
        backdrop.classList.add('show');
    }

    function hideMenu() {
        forgotPasswordModal.classList.remove('show');
        backdrop.classList.remove('show');
    }

    openFormForgotPassword.addEventListener('click', showMenu);

    closeFormForgotPassword.addEventListener('click', hideMenu);

    backdrop.addEventListener('click', hideMenu);

    document.addEventListener('click', function (event) {
        if (!forgotPasswordModal.contains(event.target) && !openFormForgotPassword.contains(event.target)) {
            hideMenu();
        }
    });
});
// End modal forgot password page

// Tab list partner
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.list-choose li');
    const partners = document.querySelectorAll('.list-partner .child');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        partners.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        partners[activeIndex].classList.add('active');
    }
});

// End tab list partner

// Tab form subscribe member
document.addEventListener('DOMContentLoaded', function () {
    const tabIndividual = document.getElementById('tab-individual');
    const tabBusiness = document.getElementById('tab-business');

    const formIndividualMember = document.getElementById('form-individual-member');
    const formBusinessMember = document.getElementById('form-business-member');

    const individualMember = document.getElementById('individual-member');
    const businessMember = document.getElementById('business-member');

    if (tabIndividual && tabBusiness && formIndividualMember && formBusinessMember && individualMember && businessMember) {
        tabIndividual.addEventListener('click', () => {
            setActiveTab(tabIndividual, formIndividualMember, individualMember);
        });

        tabBusiness.addEventListener('click', () => {
            setActiveTab(tabBusiness, formBusinessMember, businessMember);
        });

        function setActiveTab(tab, formContent, headerContent) {
            // Remove active class from all tabs and contents
            document.querySelectorAll('.choose-subscribe li').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.form-subscribe .child').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.header p').forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab and corresponding content
            tab.classList.add('active');
            formContent.classList.add('active');
            headerContent.classList.add('active');
        }
    } else {
        console.error('One or more elements not found');
    }
});
// End tab form subscribe member

// Modal form apply
document.addEventListener('DOMContentLoaded', function () {
    const openFormApply = document.querySelector('#open-modal-apply');
    const closeFormApply = document.querySelector('#close-modal-apply');
    const modalFormApply = document.getElementById('modal-form-apply');
    const backdrop = document.getElementById('backdrop-apply');

    function showModal() {
        modalFormApply.classList.add('show');
        backdrop.classList.add('show');
    }

    function hideModal() {
        modalFormApply.classList.remove('show');
        backdrop.classList.remove('show');
    }

    openFormApply.addEventListener('click', showModal);

    closeFormApply.addEventListener('click', hideModal);

    backdrop.addEventListener('click', hideModal);

    document.addEventListener('click', function (event) {
        if (!modalFormApply.contains(event.target) && !openFormApply.contains(event.target)) {
            hideModal();
        }
    });
});
// End modal form apply

// Tab navigation profile page
document.addEventListener('DOMContentLoaded', function () {
    const tabOverview = document.getElementById('tab-overview');
    const tabProfile = document.getElementById('tab-profile');
    const tabPassword = document.getElementById('tab-password');
    const tabExperience = document.getElementById('tab-experience');
    const tabAddExperience = document.getElementById('tab-add-experience');

    const overview = document.getElementById('overview');
    const profile = document.getElementById('profile');
    const password = document.getElementById('password');
    const experience = document.getElementById('experience');
    const experienceForm = document.getElementById('experience-form');

    tabOverview.addEventListener('click', () => {
        setActiveTab(tabOverview, overview);
    });

    tabProfile.addEventListener('click', () => {
        setActiveTab(tabProfile, profile);
    });

    tabPassword.addEventListener('click', () => {
        setActiveTab(tabPassword, password);
    });

    tabExperience.addEventListener('click', () => {
        setActiveTab(tabExperience, experience);
    });

    tabAddExperience.addEventListener('click', () => {
        setActiveTab(tabAddExperience, experienceForm);
    });

    function setActiveTab(tab, content) {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.left-profile li').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.right-profile .child').forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        content.classList.add('active');
    }
});
// End tab navigation profile page

// Modal form subscribe
document.addEventListener('DOMContentLoaded', function () {
    const openForm = document.querySelector('#open-form-subscribe');
    const closeForm = document.querySelector('#colse-form-subscribe');
    const formSubsc = document.getElementById('modal-form-subscribe');
    const backdrop = document.getElementById('backdrop-subscribe');

    function showForm() {
        formSubsc.classList.add('show');
        backdrop.classList.add('show');
    }

    function hideForm() {
        formSubsc.classList.remove('show');
        backdrop.classList.remove('show');
    }

    openForm.addEventListener('click', showForm);

    closeForm.addEventListener('click', hideForm);

    backdrop.addEventListener('click', hideForm);

    document.addEventListener('click', function (event) {
        if (!formSubsc.contains(event.target) && !openForm.contains(event.target)) {
            hideForm();
        }
    });
});
// End modal form subscribe

// Question and answer contact page
document.addEventListener('DOMContentLoaded', function () {
    const children = document.querySelectorAll('.child-faq');

    children.forEach(child => {
        const openAnswer = child.querySelector('.plus-icon');
        const closeAnswer = child.querySelector('.minus-icon');
        const answer = child.querySelector('#answer-question');

        function showAnswer() {
            answer.classList.add('show');  
            openAnswer.classList.add('hide');  
            closeAnswer.classList.add('show');  
        }

        function hideAnswer() {
            answer.classList.remove('show');
            openAnswer.classList.remove('hide');  
            closeAnswer.classList.remove('show');  
        }

        openAnswer.addEventListener('click', showAnswer);
        closeAnswer.addEventListener('click', hideAnswer);
    });
});

// End question and answer contact page
var viewportWidth = window.innerWidth;

console.log('Chiều rộng của viewport: ' + viewportWidth + 'px');