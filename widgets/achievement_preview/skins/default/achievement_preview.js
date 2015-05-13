jQuery(function($){
	var $slide_position_left_left = $('.slide-position-left-left');
    var $slide_position_left = $('.slide-position-left');
    var $slide_position_center = $('.slide-position-center');
    var $slide_position_right = $('.slide-position-right');
    var $slide_position_right_right = $('.slide-position-right-right');

    var $main = $slide_position_left_left.eq(0);

    var slide_width = $main.outerWidth();
    var slide_content_length = $main.find('a').length;
    var duration = slide_content_length * 3000;
    var moveMarginLeft = slide_width*-3;
    var doneMarginLeft = slide_width*-2;
    var differenceMarginLeft = doneMarginLeft - moveMarginLeft;
    console.log(slide_content_length);
    $main.css('margin-left', doneMarginLeft);

    

    function slideStartAnimate(){
    	var currentMarginLeft = parseFloat($main.css('marginLeft'));
    	var remainberMarginLeft = currentMarginLeft - moveMarginLeft;

    	var realDuration = remainberMarginLeft/differenceMarginLeft * duration;

    	console.log(realDuration);

    	$main.animate({
    		marginLeft : moveMarginLeft
    	},{
    		duration: realDuration,
    		easing: 'linear',
    		complete: function(){
    			$main.css('margin-left', slide_width*-2);
    			slideStartAnimate();
    		}
    	});
    }

    function slideStopAnimate(){
    	$main.stop(true, false);
    }


    var $achivement_preview_container = $('.achivement-preview-container');
    
    $achivement_preview_container.hover(slideStopAnimate, slideStartAnimate);

    slideStartAnimate();
    
})