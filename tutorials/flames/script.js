function init() {
    var yOffset = 0,
        slideshow = $('div.slideshow-container');

    var prevShift = function() {
        if (yOffset != 0) {
            yOffset += 435;
        } else {
            return false;
        }

        slideshow.css('background-position', '0px ' + yOffset + 'px');
    };

    var nextShift = function() {
        console.log('test');
        if (yOffset != -5655) {
            yOffset -= 435;
        } else {
            return false;
        }
        slideshow.css('background-position', '0px ' + yOffset + 'px');
    };

    var resetSlide = function() {
        yOffset = 0;
        slideshow.css('background-position', '0 0');
    };

    $('button.prev').on('click', function(){
        prevShift();
    });

    $('button.next').on('click', function(){
        nextShift();
    });

    $('button.reset').on('click', function(){
        resetSlide();
    });

    $(document).keydown(function(e){
        console.log('test', e);
        //space
       if(e.which == 32) {
        resetSlide();
       }

        //right arrow
        else if (e.which == 76) {
            nextShift();
       }

        //left arrow
        else if (e.which == 74) {
            prevShift();
        }



    });

}

init();