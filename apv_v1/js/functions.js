$.fn.jQuerySimpleCounter = function(options) {
    var settings = $.extend({
        start: 0,
        end: 100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options);

    var thisElement = $(this);

    $({ count: settings.start }).animate({ count: settings.end }, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
        },
        complete: settings.complete
    });
};
var seEjecuto = 0;
$(window).scroll(function() {
    if ($(this).scrollTop() >= $("#clientes").position().top && seEjecuto === 0) {
        seEjecuto = 1;
        $('#number1').jQuerySimpleCounter({ start: 0, end: 10, duration: 2000 });
    }
});

$(document).ready(function() {
    $('.pushpin-demo-nav').each(function() {
        var $this = $(this);
        var $target = $('#' + $(this).attr('data-target'));
        $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
        });
    });
});