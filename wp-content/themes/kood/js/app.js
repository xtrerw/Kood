jQuery(document).ready(function () {
    const slider = jQuery('.products');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.on('mousedown', function(e) {
        isDown = true;
        slider.addClass('dragging');
        startX = e.pageX - slider.offset().left;
        scrollLeft = slider.scrollLeft();
    });

    slider.on('mouseleave mouseup', function() {
        isDown = false;
        slider.removeClass('dragging');
    });

    slider.on('mousemove', function(e) {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offset().left;
        const walk = (x - startX) * 2; // Adjust the scrolling speed
        gsap.to(slider, {
            scrollLeft: scrollLeft - walk,
            duration: 0.5,
            ease: "power2.out"
        });
    });
});
