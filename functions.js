$(document).ready(function(){

    // Keep active nav highlighted
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');

    if (window.location.pathname.split("/").length == 5) {
        var target = $("a[href*='" + window.location.pathname + "']").parent()
        target.addClass("active");
        target = target.parent().closest("li");
        target.addClass("active");
        target.find("div").addClass("show");
        
        if (window.innerWidth < 768) {
            target = target.parent().closest("li");
            target.find("div").addClass("show");
        }
    }

    // Hamburger animation
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("is-active");
    });


    // Sidebar active toggle
    $(".nav li").on("show.bs.collapse", function() {
        $(this).addClass("active");
    });

    $(".nav li").on("hide.bs.collapse", function() {
        $(this).removeClass("active");
    });
  


    // Collapse sidebar into navbar
    $('#collapsingNavbar').on('show.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar').append($('#sidebar').html());
            $('#collapsedSidebar .logotext').remove();

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
