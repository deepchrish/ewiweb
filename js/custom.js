// Anchor Smooth scrolling START
$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('#intenav a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('#intenav a').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        var target = this.hash,
            modrennav = target;
        $target = $(target);
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 150
        }, 500);
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#intenav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#intenav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

// -------------#intenav id that required before UL div-------------
// -------------modrennav class add it into the div-------------
// Anchor Smooth scrolling END