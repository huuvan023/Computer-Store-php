//x là biến đếm số click. Nếu click = 3 thì biến mất button.
var x1 = 0;
var x2 = 0;
var x3 = 0;
var x4 = 0;
$(function() {

    $(".box-hidden").slice(0, 4).show();
    $("#loadMore").on('click', function(e) {

        e.preventDefault();
        x1++;
        console.log(x1);
        $(".box-hidden:hidden").slice(0, 4).slideDown();
        if ($(".box-hidden:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().bottom
        }, 1500);
        if (x1 == 2) {
            $("#loadMore").css("display", "none");
            $("#loadAll").css("display", "block");
        }
    });






    $(".box-hidden1").slice(0, 4).show();
    $("#loadMore1").on('click', function(e) {

        e.preventDefault();
        x2++;
        $(".box-hidden1:hidden").slice(0, 4).slideDown();
        if ($(".box-hidden1:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().bottom
        }, 1500);
        if (x2 == 2) {
            $("#loadMore1").css("display", "none");
            $("#loadAll1").css("display", "block");
        }
    });





    $(".box-hidden2").slice(0, 4).show();
    $("#loadMore2").on('click', function(e) {

        e.preventDefault();
        x3++;
        $(".box-hidden2:hidden").slice(0, 4).slideDown();
        if ($(".box-hidden2:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().bottom
        }, 1500);
        if (x3 == 2) {
            $("#loadMore2").css("display", "none");
            $("#loadAll2").css("display", "block");
        }
    });





    $(".box-hidden3").slice(0, 4).show();
    $("#loadMore3").on('click', function(e) {

        e.preventDefault();
        x4++;
        $(".box-hidden3:hidden").slice(0, 4).slideDown();
        if ($(".box-hidden3:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().bottom
        }, 1500);
        if (x4 == 2) {
            $("#loadMore3").css("display", "none");
            $("#loadAll3").css("display", "block");
        }
    });
});