$(document).ready(function() {
	
	$('.event_form').hide();
	$('.notice_form').hide();
	
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
