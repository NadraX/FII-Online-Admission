$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:9000,
        singleItem:false,
        autoPlay:false

    });
    var $logo = $('#scroll');
    var $logo2 = $('#no-scroll');
    var $head2 = $('#header');
    $(document).scroll(function() {
        $head2.css({display: $(this).scrollTop() < 50? "block":"none"});
        $logo2.css({display: $(this).scrollTop() < 50? "block":"none"});
        $logo.css({display: $(this).scrollTop() > 100? "block":"none"});
    });
});