$(document).ready(function(){

    // Keep active nav highlighted
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');

    if (window.location.pathname.split("/").length == 5) {
        var target = $("a[href*='" + window.location.pathname + "']").parent()
        target.addClass("active");
        target = target.parent().closest("li");
        target.addClass("active");
        target.find("i").addClass("down");
        target.find("div").collapse("show");
        if (window.innerWidth < 768) {
            target = target.parent().closest("li");
            target.find("i").addClass("down");
            target.find("div").collapse("show");
        }
    }


    // Rotate dropdown chevron
    $("li").click(function(e) {
        $(e.target).find("i").toggleClass("down");
        $(e.target).parent().toggleClass("active");
    });


    // Collapse sidebar into navbar
    $('#collapsingNavbar').on('show.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar').append($('#sidebar').html());

            // Open current nav and add highlight
            var activetarget = $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li");
            activetarget.find("div:first").addClass("show");
            activetarget.addClass("active");
            activetarget.find("i:first").addClass("down");
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
