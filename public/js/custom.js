$(window).scroll(function() {
    if ($("#navbartop").offset().top > 56) {
        $("#barra-nav").addClass("d-none");

    } else {
        $("#barra-nav").removeClass("d-none");
    }
});