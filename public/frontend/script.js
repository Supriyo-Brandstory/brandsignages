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

    // JQUERY NAVBAR DROPDOWNS
    // Function to reset all dropdowns and arrows
    function resetDropdowns() {
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');
        dropdownMenus.forEach(menu => {
            menu.classList.remove('show');
            menu.style.display = ''; // Remove inline display override
        });

        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.classList.remove('show');
            toggle.setAttribute('aria-expanded', 'false');
        });

        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => link.classList.remove('active'));
    }

    // Function to handle screen size changes
    function handleScreenChange() {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
            // Close the mobile menu on resize/orientation change
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bsCollapse) bsCollapse.hide();
        }
        resetDropdowns();
    }

    // Handle window resize with debounce
    let resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(handleScreenChange, 250);
    });

    // Handle navbar toggler click
    const navbarToggler = document.querySelector('.navbar-toggler');
    if (navbarToggler) {
        navbarToggler.addEventListener('click', () => {
            // Optional: close all dropdowns when opening/closing mobile menu
            resetDropdowns();
        });
    }

    // Handle navbar collapse shown/hidden
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse) {
        navbarCollapse.addEventListener('hidden.bs.collapse', resetDropdowns);
    }

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
});
