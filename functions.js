$(document).ready(function(){
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');

        $(".rotate").parent().click(function(){
            $(this).children().toggleClass("down"); 
        });
});
