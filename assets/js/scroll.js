$(".button").click(function() {
    $('html,body').animate({
        scrollTop: $(".scroll").offset().top},
        'slow');
});