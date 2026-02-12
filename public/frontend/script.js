document.addEventListener('DOMContentLoaded', () => {
    // SIGNAGE CAROUSEL
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const carousel = document.getElementById('signageCarousel');

    const updateButtons = () => {
        const activeSlide = document.querySelector('#signageCarousel .carousel-item.active');
        if (activeSlide) {
            const activeIndex = activeSlide.getAttribute('data-bs-slide-to');
            if (prevButton && nextButton) {
                prevButton.disabled = activeIndex === "0";
                nextButton.disabled = activeIndex === "1";
            }
        }
    };

    if (carousel) {
        carousel.addEventListener('slide.bs.carousel', updateButtons);
        updateButtons(); // Initialize button states
    }

    // TESTIMONIAL CAROUSEL
    const testimonialPrevButton = document.getElementById('testimonialPrevButton');
    const testimonialNextButton = document.getElementById('testimonialNextButton');
    const testimonialCarousel = document.getElementById('testimonialCarousel');

    const updateTestimonialButtons = () => {
        const activeSlide = document.querySelector('#testimonialCarousel .carousel-item.active');
        if (activeSlide) {
            const activeIndex = activeSlide.getAttribute('data-bs-slide-to');
            if (testimonialPrevButton && testimonialNextButton) {
                testimonialPrevButton.disabled = activeIndex === "0";
                testimonialNextButton.disabled = activeIndex === "1";
            }
        }
    };

    if (testimonialCarousel) {
        testimonialCarousel.addEventListener('slide.bs.carousel', updateTestimonialButtons);
        updateTestimonialButtons(); // Initialize button states
    }

    // FAQ SECTION
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const allAnswers = document.querySelectorAll('.faq-answer');
            const allQuestions = document.querySelectorAll('.faq-question');
            const allItems = document.querySelectorAll('.faq-item');

            const parentItem = question.closest('.faq-item');
            const answer = question.nextElementSibling;

            // Remove active class from others
            allAnswers.forEach(ans => {
                if (ans !== answer) ans.classList.remove('active');
            });

            allQuestions.forEach(q => {
                if (q !== question) q.classList.remove('active');
            });

            allItems.forEach(item => {
                if (item !== parentItem) item.classList.remove('active');
            });

            // Toggle current item
            answer.classList.toggle('active');
            question.classList.toggle('active');
            parentItem.classList.toggle('active');
        });
    });


    // CUSTOM DROPDOWN
    document.querySelectorAll('.custom-dropdown .nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            const parent = this.closest('.custom-dropdown');
            parent.classList.toggle('active');
            e.preventDefault();
        });
    });

    // NAVBAR & DROPDOWNS
    function resetDropdowns() {
        document.querySelectorAll('.mega-menu-container').forEach(menu => {
            menu.classList.remove('show');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.classList.remove('show');
        });
    }

    function handleScreenChange() {
        if (window.innerWidth >= 992) {
            closeMobileMenu();
        }
    }

    let resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(handleScreenChange, 250);
    });

    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // STANDARD DROPDOWNS HOVER (Desktop)
    function setupStandardDropdownHover() {
        const dropdowns = document.querySelectorAll('.nav-item.dropdown');
        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle, .custom-dropdown-toggle');
            const menu = dropdown.querySelector('.dropdown-menu');
            let timeout;

            if (toggle && menu) {
                dropdown.addEventListener('mouseenter', () => {
                    if (window.innerWidth >= 992) {
                        clearTimeout(timeout);
                        toggle.classList.add('show');
                        menu.classList.add('show');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });

                dropdown.addEventListener('mouseleave', () => {
                    if (window.innerWidth >= 992) {
                        timeout = setTimeout(() => {
                            toggle.classList.remove('show');
                            menu.classList.remove('show');
                            toggle.setAttribute('aria-expanded', 'false');
                        }, 200); // 200ms delay to allow crossing gaps
                    }
                });
            }
        });
    }
    setupStandardDropdownHover();

    // MOBILE STANDARD DROPDOWN TOGGLE (ARROW ONLY)
    document.querySelectorAll('.js-mobile-toggle').forEach(arrow => {
        arrow.addEventListener('click', function (e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();

                const dropdown = this.closest('.nav-item.dropdown');
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');

                if (menu && toggle) {
                    const isVisible = menu.classList.contains('show');

                    // Close others
                    document.querySelectorAll('.nav-item.dropdown .dropdown-menu.show').forEach(m => {
                        if (m !== menu) m.classList.remove('show');
                    });
                    document.querySelectorAll('.nav-item.dropdown .dropdown-toggle.show').forEach(t => {
                        if (t !== toggle) t.classList.remove('show');
                    });

                    if (!isVisible) {
                        menu.classList.add('show');
                        toggle.classList.add('show');
                        toggle.setAttribute('aria-expanded', 'true');
                    } else {
                        menu.classList.remove('show');
                        toggle.classList.remove('show');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
    });

    // Add active class to nav items when clicked (only for non-dropdown links)
    const nonDropdownNavLinks = document.querySelectorAll('.nav-item:not(.dropdown) .nav-link');
    nonDropdownNavLinks.forEach(link => {
        link.addEventListener('click', function () {
            document.querySelectorAll('.nav-link').forEach(navLink => {
                navLink.classList.remove('active');
            });
            this.classList.add('active');
        });
    });


    // NEW SIGNAGE CAROUSEL
    const prevButtonNew = document.getElementById('prevButtonNew');
    const nextButtonNew = document.getElementById('nextButtonNew');
    const carouselNew = document.getElementById('signageCarouselNew');

    const updateButtonsNew = () => {
        const activeSlide = document.querySelector('#signageCarouselNew .carousel-item.active');
        if (activeSlide) {
            const activeIndex = activeSlide.getAttribute('data-bs-slide-to');
            if (prevButtonNew && nextButtonNew) {
                prevButtonNew.disabled = activeIndex === "0";
                nextButtonNew.disabled = activeIndex === "1";
            }
        }
    };

    if (carouselNew) {
        carouselNew.addEventListener('slide.bs.carousel', updateButtonsNew);
        updateButtonsNew(); // Initialize button states
    }

    if (document.querySelector('.bgrowth-swiper')) {
        const swiper = new Swiper('.bgrowth-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            }
        });
    }

    if (document.querySelector('.bgrowth-swiper-2')) {
        const swiper3 = new Swiper('.bgrowth-swiper-2', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                }
            }
        });
    }

    // Fixing testimonial swiper
    if (document.querySelector('.new_testimonial-swiper')) {
        const swiper2 = new Swiper('.new_testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.new_testimonial-button-next',
                prevEl: '.new_testimonial-button-prev',
            },
        });
    }
    // Fixing maximum impact swiper
    if (document.querySelector('.Maximum-Impact-swiper')) {
        var maximumImpactSwiper = new Swiper('.Maximum-Impact-swiper', {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "3",
            coverflowEffect: {
                rotate: 2,
                stretch: 0,
                depth: 206,
                modifier: 2,
                slideShadows: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,

            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                },
                // when window width is >= 576px
                576: {
                    slidesPerView: 2,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                }
            }
        });
    }

    if (document.querySelector('.We-Elevate-Brands-swiper')) {
        const weElevate = new Swiper(".We-Elevate-Brands-swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            //   loop: true,
            grabCursor: true,
            navigation: {
                nextEl: ".We-Elevate-Brands-button-next",
                prevEl: ".We-Elevate-Brands-button-prev",
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
            }
        });
    }

    // Doctor Swiper for Office Name Board page
    if (document.querySelector('.doctor-swiper')) {
        const doctorSwiper = new Swiper('.doctor-swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.doctor-swiper .swiper-button-next',
                prevEl: '.doctor-swiper .swiper-button-prev',
            },
        });
    }

    // CA & Advocate Swiper for Office Name Board page
    if (document.querySelector('.ca-advocate-swiper')) {
        const caAdvocateSwiper = new Swiper('.ca-advocate-swiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.ca-advocate-swiper .swiper-button-next',
                prevEl: '.ca-advocate-swiper .swiper-button-prev',
            },
        });
    }

    // MEGA MENU INTERACTION (Desktop hover only)
    function setupMegaInteraction(selectors) {
        const triggers = document.querySelectorAll(selectors.trigger);
        const panes = document.querySelectorAll(selectors.pane);

        triggers.forEach(trigger => {
            // Hover for desktop only
            trigger.addEventListener('mouseenter', function () {
                if (window.innerWidth >= 992) {
                    const targetId = this.getAttribute('data-target');
                    if (!targetId) return;

                    triggers.forEach(t => t.classList.remove('active'));
                    panes.forEach(p => p.classList.remove('active'));

                    this.classList.add('active');
                    const targetPane = document.getElementById(targetId);
                    if (targetPane) targetPane.classList.add('active');
                }
            });
        });
    }

    // Level 1 -> Level 2 internal navigation (desktop only)
    setupMegaInteraction({
        trigger: '.mega-item-entry',
        pane: '.specialties-pane'
    });

    // Flyout submenus on Mobile (e.g., Acrylic Signages -> LED Acrylic Glow Sign)
    document.querySelectorAll('.specialty-item-wrapper.has-flyout').forEach(wrapper => {
        const link = wrapper.querySelector('.specialty-link');
        if (link) {
            link.addEventListener('click', function (e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    wrapper.classList.toggle('active');
                }
            });
        }
    });

    // MOBILE MEGA MENU TOGGLE
    document.querySelectorAll('.dropdown-mega > .nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();

                const parent = this.parentElement;
                const menu = parent.querySelector('.mega-menu-container');

                if (menu) {
                    const isVisible = menu.classList.contains('show');

                    // Close all other mega menus
                    document.querySelectorAll('.mega-menu-container').forEach(m => {
                        m.classList.remove('show');
                        m.parentElement.querySelector('.nav-link').classList.remove('show');
                    });

                    // Toggle current
                    if (!isVisible) {
                        menu.classList.add('show');
                        this.classList.add('show');
                    } else {
                        menu.classList.remove('show');
                        this.classList.remove('show');
                    }
                }
            }
        });
    });

    // MOBILE MENU SLIDE (LEFT TO RIGHT) - NO OVERLAY
    let closeBtn = document.querySelector('.mobile-menu-close');
    if (!closeBtn && navbarCollapse) {
        closeBtn = document.createElement('button');
        closeBtn.className = 'mobile-menu-close';
        closeBtn.innerHTML = '&times;';
        closeBtn.setAttribute('aria-label', 'Close menu');
        navbarCollapse.insertBefore(closeBtn, navbarCollapse.firstChild);
    }

    function openMobileMenu() {
        if (navbarCollapse) {
            navbarCollapse.classList.add('show');
        }
    }

    function closeMobileMenu() {
        if (navbarCollapse) {
            navbarCollapse.classList.remove('show');
            // Close all dropdowns
            document.querySelectorAll('.mega-menu-container').forEach(m => {
                m.classList.remove('show');
            });
        }
    }

    if (navbarToggler) {
        // Clone and replace to kill all original Bootstrap listeners
        const newToggler = navbarToggler.cloneNode(true);
        navbarToggler.parentNode.replaceChild(newToggler, navbarToggler);

        newToggler.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (navbarCollapse.classList.contains('show')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        });
    }

    // Close menu on navigation
    document.querySelectorAll('.navbar-collapse .nav-link:not(.dropdown-toggle)').forEach(link => {
        link.addEventListener('click', function () {
            if (window.innerWidth < 992) closeMobileMenu();
        });
    });

    // Mobile Mega Menu Sub-category Toggle
    document.querySelectorAll('.mobile-cat-toggle').forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const parent = this.closest('.mobile-mega-section-header');
            if (parent) {
                parent.classList.toggle('active');
            }
        });
    });
});
