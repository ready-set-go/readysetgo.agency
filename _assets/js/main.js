// JavaScript Document

// show hide left menu

	$('.menu-btn').click(function(){
		if($('nav ul').hasClass('expand')){
			$('nav ul').removeClass('expand');
			$('.menu-btn').removeClass('close');

		} else {
			$('nav ul').addClass('expand');
			$('.menu-btn').addClass('close');
		}
	});

// this function fixes placeholders in browsers that don't support it
function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}
function placeholderSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}





function firstLoad() {
	initVars();
	showMenu();
	initPlaceholders();
}

$(function() {
	firstLoad();
});
