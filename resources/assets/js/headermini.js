$(document).ready(function () 
{
    $(window).scroll(function () 
    {
        var htmlTop = $(document).scrollTop();
        if ( htmlTop > 10) {
            $("#header").addClass("mini");
        }
        else {
            $("#header").removeClass("mini");
        }
    });

});
