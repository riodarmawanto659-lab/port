// Mobile menu toggle
const menuIcon = document.querySelector('.menu-icon');
const mobileNav = document.querySelector('.mobile-nav');
const mobileNavClose = document.querySelector('.mobile-nav-close');

function closeMobileMenu() {
    mobileNav.classList.remove('active');
}

function openMobileMenu() {
    mobileNav.classList.add('active');
}

if (menuIcon && mobileNav) {
    menuIcon.addEventListener('click', () => {
        mobileNav.classList.toggle('active');
    });

    if (mobileNavClose) {
        mobileNavClose.addEventListener('click', closeMobileMenu);
    }

    document.querySelectorAll('.mobile-nav a').forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
}

// ======================
// PROJECT SLIDER
// ======================

let currentProject = 0;

const imageContainers = document.querySelectorAll('.image-container');
const projectDetails = document.querySelectorAll('.project-details');
const progressDots = document.querySelectorAll('.progress-dot');

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

const totalProjects = projectDetails.length;

function updateProject(index) {

    imageContainers.forEach((item, i) => {
        item.classList.remove('active');

        if (i === index) {
            item.classList.add('active');
        }
    });

    projectDetails.forEach((item, i) => {
        item.classList.remove('active');

        if (i === index) {
            item.classList.add('active');
        }
    });

    progressDots.forEach((item, i) => {
        item.classList.remove('active');

        if (i === index) {
            item.classList.add('active');
        }
    });

    currentProject = index;
}

// NEXT
if (nextBtn) {
    nextBtn.addEventListener('click', () => {

        currentProject++;

        if (currentProject >= totalProjects) {
            currentProject = 0;
        }

        updateProject(currentProject);
    });
}

// PREV
if (prevBtn) {
    prevBtn.addEventListener('click', () => {

        currentProject--;

        if (currentProject < 0) {
            currentProject = totalProjects - 1;
        }

        updateProject(currentProject);
    });
}

// DOTS
progressDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        updateProject(index);
    });
});

// KEYBOARD
document.addEventListener('keydown', (e) => {

    if (e.key === 'ArrowRight') {
        nextBtn.click();
    }

    if (e.key === 'ArrowLeft') {
        prevBtn.click();
    }
});

// TOUCH
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
});

document.addEventListener('touchend', (e) => {

    touchEndX = e.changedTouches[0].screenX;

    if (touchEndX < touchStartX - 50) {
        nextBtn.click();
    }

    if (touchEndX > touchStartX + 50) {
        prevBtn.click();
    }
});

// INIT
updateProject(0);

// ======================
// CONTACT FORM
// ======================

const contactForm = document.querySelector('.contact-form');

if (contactForm) {

    contactForm.addEventListener('submit', () => {

        const button = contactForm.querySelector('button');

        if (button) {
            button.innerText = 'Sending...';
        }
    });
}

// ======================
// SMOOTH SCROLL
// ======================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});