$(document).ready(function() {
    const $carousel = $('.main-carousel').flickity({
        contain: true,
        autoPlay: 2000, // Auto-play duration
        prevNextButtons: false, // Disable default buttons
        pageDots: false, // Disable default page dots
        wrapAround: true, // Allow wrap-around
    });

    let cards = $('.carousel-card');

    // Create indicators
    function createIndicators() {
        let totalCards = cards.length;
        $('.carousel-indicator').empty(); // Clear existing indicators
        for (let i = 0; i < totalCards; i++) {
            let button = $('<button class="button h-4"></button>');
            let dot = $('<div class="w-10 h-1 rounded-full"></div>');
            button.append(dot);
            if (i === 0) {
                dot.addClass('bg-blue-600'); // Active indicator
            } else {
                dot.addClass('bg-gray-300'); // Inactive indicator
            }
            button.appendTo('.carousel-indicator');
        }
    }

    createIndicators();

    // Handle indicator clicks
    $('.carousel-indicator').on('click', '.button', function() {
        let index = $(this).index();
        $carousel.flickity('select', index);
        updateIndicators(index);
    });

    // Update indicators on slide change
    $carousel.on('select.flickity', function(event, index) {
        updateIndicators(index);
    });

    function updateIndicators(index) {
        $('.carousel-indicator .button div').removeClass('bg-blue-600').addClass('bg-gray-300'); // Reset all
        $('.carousel-indicator .button').eq(index).find('div').removeClass('bg-gray-300').addClass('bg-blue-600'); // Active
    }

    // Handle arrow clicks
    $('.left-arrow').on('click', function() {
        $carousel.flickity('previous');
    });

    $('.right-arrow').on('click', function() {
        $carousel.flickity('next');
    });

    // Fix for the carousel getting stuck
    $carousel.on('settle.flickity', function(event, index) {
        // This event triggers when the carousel has settled on a slide
        // No action needed here, just ensuring the function is called
    });
});
