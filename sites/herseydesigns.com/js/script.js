$(document).ready(function() {
	// start fullscreen
	$(function(){
			$.fn.supersized.options = {  
				startwidth: 640,  
				startheight: 480,
				vertical_center: 1,
				slides : [
					{image : 'http://herseydesigns.com/images/bg_images/bgCarmel.jpg' }
				]
			};
	        $('#supersized').supersized(); 
	});
	
	// shows the ink on click of the noted link  
    $('#ink').on('click', function thumbsInk() {
   	
   	// close all thumb bars
	$('.slidingWindow').not('#thumbsInk')
		.animate(
			{ top: -360, opacity: 0}, {
			duration: 'slow',
			easing: 'linear'
			}
		)
   	
	$('#thumbsInk')
		.animate(
			{ top: 0, opacity: 1 }, {
			duration: 1500,
			easing: 'easeOutElastic'
			}
		)
          
   		return false;
             
    });
    
    // shows the pixels on click of the noted link  
    $('#pixels').on('click', function thumbsPixels() {
   	
   	// close all thumb bars
	$('.slidingWindow').not('#thumbsPixels')
		.animate(
			{ top: -360, opacity: 0}, {
			duration: 'slow',
			easing: 'linear'
			}
		)
   	
	$('#thumbsPixels')
		.animate(
			{ top: 0, opacity: 1 }, {
			duration: 1500,
			easing: 'easeOutElastic'
			}
		)
          
   		return false;
             
    });
    
    // shows the contact on click of the noted link  
    $('#contact').on('click', function contact() {
   	
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
	$('.close').on('click', function() {
		$('.slidingWindow')
			.animate(
				{ top: -360, opacity: 0}, {
				duration: 'slow',
				easing: 'linear'
				}
			)
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
	
		function(){
			var titleId = $(this).children().attr('id');
			
			$('#supersized img').attr('src','http://herseydesigns.com/images/bg_images/'+ titleId +'1.jpg').attr('title', titleId).attr('name', 1);
	  		
		return false;
		}
	);
	
	// load controls
	$('#thumbsInk').find('.thumbPod').on('click', function() {
	
		var $controls = $('.controls');
		
		// load prev & next controls
		$("#prev").html("<img src='/img/iconPrevious.png' alt='Previous' />");
		$("#next").html("<img src='/img/iconNext.png' alt='Next' />");
		
		// show controls
		$controls.show();
		
		// hide controls image
		$controls.find('img').hide();
		
		return false;
		}
	);
	
	// hide controls for Pixels
	$('#thumbsPixels').on('click', '.thumbPod', 
	
		function(){
				
		// hide controls
		$('.controls').hide();
		
		return false;
		}
	);
	
	// change background image on control click
	$('#prev').click(
		
		function() {
			var $supersized = $('#supersized');
				$titleId = $supersized.find('img').attr('title'),
				$imageNum = $supersized.find('img').attr('name'),
	        	$file = parseFloat($imageNum) - 1;
	        	
			$.ajax({
    			url:"http://www.herseydesigns.com/images/bg_images/" + $titleId + $file + ".jpg",
    			type:'HEAD',
    			error:
        		function(){
            	$('#prev').find('img').fadeOut('fast');
        		},
    			success:
        		function(){
            	$supersized.find('img').attr('name', $file);
	        	
	        	$supersized.find('img').attr("src", function() {
				return "http://herseydesigns.com/images/bg_images/" + $titleId + $file + ".jpg";
				});
        		}
			});
      		
		}
	);
	
	$('#next').click(
		
		function() {
			var $supersized = $('#supersized');
				$titleId = $supersized.find('img').attr('title'),
				$imageNum = $supersized.find('img').attr('name'),
	        	$file = parseFloat($imageNum) + 1;
	        	
			$.ajax({
    			url:"http://www.herseydesigns.com/images/bg_images/" + $titleId + $file + ".jpg",
    			type:'HEAD',
    			error:
        		function(){
            	$('#next').find('img').fadeOut('fast');
        		},
    			success:
        		function(){
            	$supersized.find('img').attr('name', $file);
	        	
	        	$supersized.find('img').attr("src", function() {
				return "http://herseydesigns.com/images/bg_images/" + $titleId + $file + ".jpg";
				});
        		}
			});
	        
		}
	);
	
	$('#prev').hover(
	
		function() {
			$('#prev').find('img').fadeTo('slow', 0.60);
		},
		
		function() {
			$('#prev').find('img').fadeOut('fast');
		}
	
	);
	
	$('#next').hover(
	
		function() {
			$('#next').find('img').fadeTo('slow', 0.60);
		},
		
		function() {
			$('#next').find('img').fadeOut('fast');
		}
	
	);
	
	
});