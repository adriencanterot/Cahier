$(document).ready(function() {
	
	$('.event_form').hide();
	$('.notice_form').hide();
	$('.accordion').accordion();
	$('.datepicker').datepicker();
	$('.richtext').wysiwyg({
		rmUnusedControls : true,
		initialContent : ''
	});
})

function add(text, into) {
	into.innerHTML += text;
}

function showhide(element) {
	if($(element).is(':hidden')) {
		$(element).slideDown('slow');
	} else {
		$(element).slideUp('slow')
	}
}
