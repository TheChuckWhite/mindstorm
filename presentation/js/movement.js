$(document).ready(function () {
    var animationOn = false;

    $('.clickable').on('click', function(){
        //position of clicked object
        var pos = $(this).position('left');
        var objectPos = pos.left;

        //current position of leo
        var lPos = $('#leo').position('left');
        var leoPos = lPos.left;

        checkDirection(objectPos, leoPos);
    });

    function checkDirection(objectPos, leoPos){
        if(objectPos > leoPos){
            moveLeo(objectPos, "right");
        }
        else if(objectPos < leoPos){
            moveLeo(objectPos, "left");
        }
    }

    function moveLeo(objectPos, goToDirection){
        if(animationOn === true){
            return;
        }
        animationOn = true;

        $('#leo').css({'background': 'url("img/leo-walking-'+goToDirection+'.gif") no-repeat center bottom', 'background-size': 'auto 280px'});
        $('#leo').animate({left: objectPos}, 2300, function(){
            $('#leo').css({'background': 'url("img/leo-front.png") no-repeat center bottom', 'background-size': 'auto 280px'});
            animationOn = false;
        });
    }
});

