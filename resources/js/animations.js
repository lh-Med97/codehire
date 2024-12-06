// Intersection Observer for scroll animations
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const handleIntersect = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target); // Stop observing once animation is triggered
        }
    });
};

// Create observer
const observer = new IntersectionObserver(handleIntersect, observerOptions);

// Initialize animations
document.addEventListener('DOMContentLoaded', () => {
    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });

    // Initialize staggered animations
    const staggeredElements = document.querySelectorAll('[data-stagger]');
    staggeredElements.forEach((element, index) => {
        element.style.animationDelay = `${index * 100}ms`;
    });
});

// Alpine.js animations
document.addEventListener('alpine:init', () => {
    Alpine.data('animations', () => ({
        show: false,
        init() {
            this.show = true;
        }
    }));
});

// Page transition
window.addEventListener('beforeunload', () => {
    document.body.classList.add('page-exit');
});

// Smooth scroll
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
