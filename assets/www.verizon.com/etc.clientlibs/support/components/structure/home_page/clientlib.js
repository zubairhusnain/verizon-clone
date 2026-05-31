$(document).ready(function () {
    $(document).on('click', '.smartbanner__exit', function (e) {
		$('.smartbanner').hide();
		$('.gnav20.gnav20-sticky>div.gnav20-sticky-content').css('top','0');
		$('main').css('margin-top','unset');
	});
});

