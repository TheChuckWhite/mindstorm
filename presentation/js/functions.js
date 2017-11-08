/**
 * Created by Karin on 5-11-2017.
 */
$(document).ready(function () {
    //INTRO
    $('.nameplate').on('click', function(){
        $('.intro').animate({"opacity": 1});
        $('.intro').children('fieldset').each(function(index){
            var self = $(this);
            setTimeout(function () {
                self.css({marginLeft: "280px"});
            }, index*420);
        });

        $('.intro_close').on('click', function(){
            $('.intro').children('fieldset').each(function(index){
                var self = $(this);
                setTimeout(function () {
                    self.css({marginLeft: "0px"});
                }, index*420);
            });
            setTimeout(function () {
                $('.intro').animate({"opacity": 0});
            }, 2400);
        });
    })

    //DESIGNS AND LOGOS
    $('.bulletin').on('click', function(){
        setTimeout(function () {
            $('.overlay').css({"opacity": 1, "width": "100vw", "height": "100vh" });
            $('.bulletin_large').css({"top": 0});
        }, 2400);

        $('.bulletin_large').on('click', function(){
            $('.bulletin_large').css({"top": "-2000px"});
            setTimeout(function () {
                $('.overlay').css({"opacity": 0, "width": "0", "height": "0" });
            }, 300);
        });
    })

    //FINAL DESIGN
    $('.final img').on('click', function(){
        $('.overlay').css({"opacity": 1, "width": "100vw", "height": "100vh" });
        $('.worktable img').css({"-webkit-transform": "rotateX(0deg)", "transform": "rotateX(0deg)", "transition": "600ms"});
        setTimeout(function () {
            $('.final').css({"height": "520px", "bottom": "136px", "z-index": "11"});
            $('.worktable img').css({"width": "640px", "transition": "700ms"});
            $('.worktable_close').css({"opacity": 1, "transition": "300ms"});
        }, 400);


        $('.worktable_close').on('click', function(){
            $('.worktable img').css({"width": "110px", "transition": "1100ms"});
            $('.worktable_close').css({"opacity": 0, "transition": "300ms"});

            setTimeout(function () {
                $('.final').css({"height": "60px", "bottom": "118px", "z-index": "4"});
                $('.worktable img').css({"-webkit-transform": "rotateX(60deg)", "transform": "rotateX(60deg)", "transition": "1000ms"});
            }, 400);
            setTimeout(function(){
                $('.overlay').css({"opacity": 0, "width": "0", "height": "0" });
            }, 600);
        });
    });

});

