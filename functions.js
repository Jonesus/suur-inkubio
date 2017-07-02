$(document).ready(function(){

    // Keep active nav highlighted
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');


    // Rotate dropdown chevron
    $(".rotate").parent().click(function(){
        $(this).children().toggleClass("down"); 
    });


    // Collapse sidebar into navbar
    $('#collapsingNavbar').on('show.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar').append($('#sidebar').html());
        }
    });
    $('#collapsingNavbar').on('hidden.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar ul:last-child').remove();
        }
    });
    $(window).on('resize', function () {
        if (window.innerWidth > 768) {$('#collapsingNavbar').collapse('hide');}
    });


});
