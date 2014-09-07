$(document).ready(function() {
    $('.imgWrap').unslider({
    	speed: 700,               //  The speed to animate each slide (in milliseconds)
		delay: 3000,              //  The delay between slide animations (in milliseconds)
		keys: true,  
		dots: true,
		fluid: true
    });
});


var unslider = $('.imgWrap').unslider();

$('.unslider-arrow').click(function() {
    var fn = this.className.split(' ')[1];
    
    //  Either do unslider.data('unslider').next() or .prev() depending on the className
    unslider.data('unslider')[fn]();
});
