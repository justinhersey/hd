$(document).ready(function() {

	$('.slidingWindow').hide(); // hide sliding all windows
	
	// shows the ink on click of the noted link  
    $('#ink').click(function thumbsInk() {
   	
   	// close all thumb bars
	$('.slidingWindow').not('#thumbsInk')
		.fadeOut('slow');
   	
	$('#thumbsInk')
		.fadeIn('fast');
		  
   		return false;
             
    });
    
    // shows the pixels on click of the noted link  
    $('#pixels').click(function thumbsPixels() {
   	
   	// close all thumb bars
	$('.slidingWindow').not('#thumbsPixels')
		.fadeOut('slow');
   	
	$('#thumbsPixels')
		.fadeIn('fast');
		  
   		return false;
             
    });
    
    // shows the contact on click of the noted link  
    $('#contact').click(function contact() {
   	
   	// close all thumb bars
	$('.slidingWindow').not('#contentContact')
		.animate(
			{ top: -360, opacity: 0}, {
			duration: 'slow',
			easing: 'linear'
			}
		)
   	
	$('#contentContact')
		.animate(
			{ top: 0, opacity: 1 }, {
			duration: 1500,
			easing: 'easeOutElastic'
			}
		)
          
   		return false;
             
    });

// hides the div on click of the noted link  
	$('.close').click(function() {
		$('.slidingWindow')
			.fadeOut('slow');
		return false;
	});

// project titles

	// hide titles
	$('.thumbPodTitleBar').hide();
	
	// show current title on hover
	$('.thumbPod').hover(
		
		function() {
		$(this).children().addClass('currentTitle'); // add class
		$('.currentTitle').show(); // show title
		},
		
		// hide current title on hoverOut
		function() {
		$('.currentTitle').fadeOut('slow'); // fadeOut Title
		$(this).children().removeClass('currentTitle'); // remove class
		
		}
	);

// load fullscreen images
	$('.thumbPod').click(

		function() {
		var $titleId = $(this).children().attr('id');
		$("#bgImage").attr("src", function() {
		return "/images/bg_images/" + $titleId + ".jpg";
		});
		
		return false;
		}
	);
});