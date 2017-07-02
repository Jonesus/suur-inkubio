$(document).ready(function(){

    // Keep active nav highlighted
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');

    if (window.location.pathname.split("/").length == 5) {
        $("a[href*='" + window.location.pathname + "']").parent().addClass("active");
        $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").addClass("active");
        $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").find("i").addClass("down");
        $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").find("div").collapse("show");
        console.log($("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").find("i"));
        if (window.innerWidth < 768) {
            console.log("moi");
            $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").find("i").addClass("down");
            $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").find("div").collapse("show");
        }

    }


    // Rotate dropdown chevron
    $("li").click(function(e) {
        $(e.target).find("i").toggleClass("down");
    });


    // Collapse sidebar into navbar
    $('#collapsingNavbar').on('show.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar').append($('#sidebar').html());
            $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").find("div:first").addClass("show");
            $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").addClass("active");
            $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li").find("i:first").addClass("down");
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
