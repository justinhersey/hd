// NAVIGATION BAR
$(document).ready(function() {
	var $navItems = $('#navItems'),
		$navPlus = $('#navPlus');
	$navPlus.toggle(function() {
		$navItems.animate(
			{ left: 0 }, {
			duration: 1500,
			easing: 'easeOutElastic'
			}
		)
	},

	function() {
		$navItems.animate(
			{ left: -150 }, {
			duration: 'slow',
			easing: 'linear'
			}
		);

	}
	);
	
	// Show Random Message
	var $message = $('.message');
	$message.eq( Math.floor(Math.random()*$message.length) ).show();
	
	$navPlus.on('click', function() {
			$message.fadeOut('fast');
		}
	);
});       

// NAV PLUS COLOR CHANGES      
$(document).ready(function navPlusColors() {
	// changes the color of #navPlus
	$('#navPlus').animate(
		{ color: '#ffffff' }, 500)
	.animate(
		{ color: '#ff5743' }, 500, navPlusColors)
	.animate(
		{ color: '#a4a16e' }, 500, navPlusColors)
	.animate(	
		{ color: '#609f84' }, 500, navPlusColors)
	.animate(
		{ color: '#126b67' }, 500, navPlusColors)
	.animate(
		{ color: '#151d28' }, 500, navPlusColors)
	.animate(
		{ color: '#0d0d0d' }, 500, navPlusColors);
});