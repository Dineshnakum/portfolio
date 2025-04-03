document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navLinks = document.querySelector('.nav-links');

    mobileMenuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        mobileMenuBtn.innerHTML = navLinks.classList.contains('active')
            ? '<i class="fas fa-times"></i>'
            : '<i class="fas fa-bars"></i>';
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                }
            }
        });
    });

    // Create stars
    function createStars() {
        const body = document.querySelector('.ghibli-bg');
        const starCount = 200;

        for (let i = 0; i < starCount; i++) {
            const star = document.createElement('div');
            star.className = 'star';

            // Random position
            const x = Math.random() * 100;
            const y = Math.random() * 100;

            // Random size and opacity
            const size = Math.random() * 2;
            const opacity = Math.random() * 0.8 + 0.2;

            // Random animation duration and delay
            const duration = Math.random() * 5 + 3;
            const delay = Math.random() * 5;

            star.style.left = `${x}%`;
            star.style.top = `${y}%`;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;
            star.style.opacity = opacity;
            star.style.animationDuration = `${duration}s`;
            star.style.animationDelay = `${delay}s`;

            body.appendChild(star);
        }
    }

    // Create shooting stars
    function createShootingStars() {
        const body = document.querySelector('.ghibli-bg');

        setInterval(() => {
            const shootingStar = document.createElement('div');
            shootingStar.className = 'shooting-star';

            shootingStar.style.left = `${Math.random() * 10}%`;
            shootingStar.style.top = `${Math.random() * 100}%`;
            shootingStar.style.animationDuration = `${Math.random() * 2 + 1}s`;

            body.appendChild(shootingStar);

            setTimeout(() => {
                shootingStar.remove();
            }, 2000);
        }, 3000);
    }

    // Animate elements on scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.skill-category, .project-card, .timeline-item');

        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (elementPosition < screenPosition) {
                element.classList.add('ghibli-animate');
            }
        });
    }

    // Initialize
    createStars();
    createShootingStars();
    animateOnScroll();

    window.addEventListener('scroll', animateOnScroll);
});
