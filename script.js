$(document).ready(function() {
    'use strict'

    // Form Validation using jQuery
    const $form = $('.needs-validation');
    $form.on('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            // Show success alert using jQuery fadeIn
            $('#contactSuccessAlert').hide().removeClass('d-none').fadeIn();
            // Hide form using jQuery fadeOut
            $form.fadeOut();
        }
        $(this).addClass('was-validated');
    });

    // Scroll to Top logic using jQuery
    const $scrollToTopBtn = $('#scrollToTop');
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 300) {
            $scrollToTopBtn.fadeIn();
        } else {
            $scrollToTopBtn.fadeOut();
        }
    });

    $scrollToTopBtn.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

    // Initialize Bootstrap components (still using Bootstrap JS API)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    // Dynamic Modal Trigger Example
    // Automatically show the welcome alert if it's the first visit (simulated)
    $('.alert-info').on('click', function() {
        $(this).slideUp();
    });

});
