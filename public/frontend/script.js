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
    document.addEventListener('DOMContentLoaded', function () {
        // Function to reset all dropdowns and arrows
        function resetDropdowns() {
            const dropdownMenus = document.querySelectorAll('.dropdown-menu');
            dropdownMenus.forEach(menu => {
                menu.style.display = 'none';
                menu.classList.remove('show');
            });
    
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach(toggle => toggle.classList.remove('show'));
    
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('active'));
        }
    
        // Function to handle screen size changes
        function handleScreenChange() {
            resetDropdowns();
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse) {
                navbarCollapse.classList.remove('show');
            }
        }
    
        // Handle dropdown toggle
        const navItems = document.querySelectorAll('.nav-item.dropdown .nav-link');
        navItems.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
    
                const parentDropdown = this.closest('.dropdown');
                const dropdownMenu = parentDropdown.querySelector('.dropdown-menu');
                const isOpen = dropdownMenu.classList.contains('show');
    
                // First, reset all dropdowns
                resetDropdowns();
    
                // Then toggle current dropdown if it wasn't open
                if (!isOpen) {
                    dropdownMenu.style.display = 'block';
                    dropdownMenu.classList.add('show');
                    this.classList.add('show', 'active');
                }
            });
        });
    
        // Close dropdowns when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                resetDropdowns();
            }
        });
    
        // Handle window resize with debounce
        let resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(handleScreenChange, 250);
        });
    
        // Handle navbar toggler click
        const navbarToggler = document.querySelector('.navbar-toggler');
        if (navbarToggler) {
            navbarToggler.addEventListener('click', resetDropdowns);
        }
    
        // Handle navbar collapse shown/hidden
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse) {
            navbarCollapse.addEventListener('shown.bs.collapse', resetDropdowns);
            navbarCollapse.addEventListener('hidden.bs.collapse', resetDropdowns);
        }
    
        // Add active class to nav items when clicked
        const nonDropdownNavLinks = document.querySelectorAll('.nav-item:not(.dropdown) .nav-link');
        nonDropdownNavLinks.forEach(link => {
            link.addEventListener('click', function () {
                document.querySelectorAll('.nav-link').forEach(navLink => {
                    navLink.classList.remove('active');
                });
                this.classList.add('active');
            });
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
    $(document).ready(function() {
            var modal=new bootstrap.Modal(document.getElementById('popupModal'));

            $('#getStarted').click(function() {
                    var isValid=true;

                    // Validate all input fields
                    $('#mainForm .form-control, #mainForm .form-select').each(function() {
                            if ( !$(this).val()) {
                                $(this).addClass('is-invalid');
                                $(this).next('.invalid-feedback').show();
                                isValid=false;
                            }

                            else {
                                $(this).removeClass('is-invalid');
                                $(this).next('.invalid-feedback').hide();
                            }
                        });

                    // If validation fails, don't show the modal
                    if ( !isValid) {
                        return;
                    }

                    // Set values in the modal
                    $('#modalTitle').val($('#title').val());
                    $('#modalHeight').val($('#height').val());
                    $('#modalWidth').val($('#width').val());

                    // Show the modal
                    modal.show();
                });

            // Remove error highlight when input is changed
            $('#mainForm .form-control, #mainForm .form-select').on('input change', function() {
                    if ($(this).val()) {
                        $(this).removeClass('is-invalid');
                        $(this).next('.invalid-feedback').hide();
                    }
                });

            // Show/Hide upload field based on type selection
            $('input[name="type"]').change(function() {
                    if ($(this).val()==='upload') {
                        $('#imageField').show();
                    }

                    else {
                        $('#imageField').hide();
                    }
                });

            $('#popupForm').submit(function(e) {
                    e.preventDefault();
                    var formData=new FormData(this);

                    $.ajax({

                        url: "{{ route('custom-inquiry.store') }}",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.message) {
                                modal.hide();
                                $('#successMessage').fadeIn().delay(3000).fadeOut();
                                $('#mainForm')[0].reset();
                                $('#popupForm')[0].reset();
                                $('.form-control, .form-select').removeClass('is-invalid'); // Reset validation styles
                            }
                        }

                        ,
                        error: function(xhr) {
                            alert('Something went wrong! Please try again.');
                        }
                    });
            });
    });
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

            // Fixing testimonial swiper
            const swiper2 = new Swiper('.new_testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.new_testimonial-button-next',
                    prevEl: '.new_testimonial-button-prev',
                },
            });
});


