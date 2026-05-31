$(document).ready(function () {
     if ($('.mobile')[0]) {
         if (window.matchMedia('(max-width: 640px)').matches) {
             $('.mobile').css('display','block');
         }else{
             $('.mobile').css('display','none');
         }
     } else if($('.desktop')[0]) {
         if (window.matchMedia('(max-width: 767px)').matches) {
             $('.desktop').css('display','none');
         }else{
             $('.desktop').css('display','block');
         }
     } else {
         $('.both').css('display','block');
     }
    $( window ).resize(function() {
        if ($('.mobile')[0]) {
            if (window.matchMedia('(max-width: 640px)').matches) {
                $('.mobile').css('display','block');
            }else{
				 $('.mobile').css('display','none');
            }
        } else if($('.desktop')[0]) {
            if (window.matchMedia('(max-width: 767px)').matches) {
                $('.desktop').css('display','none');
            }else{
                $('.desktop').css('display','block');
            }
        } else {
            $('.both').css('display','block');
        }
    });
    $('.related-slide').keydown(function(event){
    	var keycode = (event.keyCode ? event.keyCode : event.which);
    	if(keycode == '13'){
           var anchorval= $(this).find('a');
           var url = 	anchorval.attr('href');
           window.open(url);
    	}
    });
});