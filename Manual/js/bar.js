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
    
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:9000,
        singleItem:true,
        autoPlay:false

    });
    $(".a12q").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:6
        },
        1000:{
            items:6
        }
    }

    });


    $(document).scroll(function() {
        var $logo2 = $('#no-scroll');
        // $logo2.css({height: $(this).scrollTop() < 50? "146px":"81px"});
        // $logo2.css({width: $(this).scrollTop() < 50? "230px":"126px"});
        // $logo2.css({margin-left: $(this).scrollTop() < 50? "-120px":"-50px"});


    });

    $(document).on('mouseenter', '.divbutton', function () {
        $(this).find(":button").show();
    }).on('mouseleave', '.divbutton', function () {
        $(this).find(":button").hide();
    });

    $('#bprof').on('click',function(){
    if($('#divstud').css('display')!='none'){
    $('#divprof').show().siblings('div').hide();
    }else if($('#divprof').css('display')!='none'){
        $('#divstud').show().siblings('div').hide();
    }
    });

    $('#bstud').on('click',function(){
    if($('#divprof').css('display')!='none'){
    $('#divstud').show().siblings('div').hide();
    }else if($('#divstud').css('display')!='none'){
        $('#divprof').show().siblings('div').hide();
    }
    });

    var theToggle = document.getElementById('toggle');

    // based on Todd Motto functions
    // http://toddmotto.com/labs/reusable-js/

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }
    // addClass
    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    // removeClass
    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
    // toggleClass
    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0 ) {
                newClass = newClass.replace( " " + className + " " , " " );
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    theToggle.onclick = function() {
       toggleClass(this, 'on');
       return false;
    }
});