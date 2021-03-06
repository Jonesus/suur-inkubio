$(window).load(function() {
    $("body").removeClass("preload");
  });

$(document).ready(function(){

    // Keep active nav highlighted
    $('li.active').removeClass('active');
    var slugparts = window.location.pathname.split("/");
    if (slugparts[1] == "en") {
        $('a[href="/en/' + slugparts[2] + '"]').closest('li').addClass('active');
    } else {
        $('a[href="/' + slugparts[1] + '"]').closest('li').addClass('active');
    }

    if (slugparts.length == 5 || slugparts.length == 6) {
        var target = $("a[href*='" + window.location.pathname + "']").parent()
        target.addClass("active");
        target = target.parent().closest("li");
        target.addClass("active");
        target.find("div").addClass("show");
        
        if (window.innerWidth < 768) {
            $("#collapsedSidebar").addClass("show");
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
  
    if (!(!$('#page')[0] ||
        $('.error404')[0])) {
            $('#sidebar').removeClass("superhidden");
    }

    // Collapse sidebar into navbar
    $('#collapsingNavbar').on('show.bs.collapse', function (e) {
        if ($(this).is(e.target)) {
            $('#collapsedSidebar').append($('#sidebar').html());
            $('#collapsedSidebar .logotext').remove();

            // Open current nav and add highlight
            if (window.location.pathname.includes("kiltalaisille") ||
                window.location.pathname.includes("en/inkubytes")) {
                var activetarget = $("a[href*='" + window.location.pathname + "']").parent().parent().closest("li").parent().closest("li");
                activetarget.find("div:first").addClass("show");
                activetarget.addClass("active");
                activetarget.find("i:first").addClass("down");
            }
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

                
    //card onclick animation in yrityksille site
    var flip1 = document.querySelector('.flip1');
        flip1.addEventListener('click', function () {
            flip1.classList.toggle('hover') 
    });
    var flip2 = document.querySelector('.flip2');
        flip2.addEventListener('click', function () {
            flip2.classList.toggle('hover') 
    });
    var flip3 = document.querySelector('.flip3');
        flip3.addEventListener('click', function () {
            flip3.classList.toggle('hover') 
    });
    var flip4 = document.querySelector('.flip4');
        flip4.addEventListener('click', function () {
            flip4.classList.toggle('hover') 
    });
    var flip5 = document.querySelector('.flip5');
        flip5.addEventListener('click', function () {
            flip5.classList.toggle('hover') 
    });
    var flip6 = document.querySelector('.flip6');
        flip6.addEventListener('click', function () {
            flip6.classList.toggle('hover') 
    });
});



