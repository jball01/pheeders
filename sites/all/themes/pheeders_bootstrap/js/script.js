(function($) {

    var toggle = false;

    Drupal.behaviors.myBehavior = {

        attach: function (context, settings) {

            $('p').click(function () {
                test();
            });

            $('#welcome-intro').mouseenter(function() {
                $(this).css('background-color', 'yellow');
            })
            $('#welcome-intro').mouseleave(function() {
                $(this).css('background-color','red');
            })
        }
    };

    function test(){

        toggle = !toggle;
        if(toggle === true) {
            $('p').fadeTo('slow', .1);
        }
        else {
            $('p').fadeTo('slow',1);
        }
    }

})(jQuery);