(function ($) {

    $(document).ready(function(){
            if(typeof $('h2 .visuallyHidden')!='undefined' && $('h2 .visuallyHidden').length>0){
                $('.expansion_button').attr('aria-label',"See instructions for "+$('h2 .visuallyHidden').text()+" collapsed");
            }

            $('.expansion_button').click(function(){
        		var buttonid = $(this).attr('id');
                var exp_id = buttonid.substring(buttonid,buttonid.lastIndexOf("_"));
				//var btn_text = $('#targetExpansiontitle').val();
                var btn_text = $('#'+buttonid).text();
				if($('#'+ exp_id +'_expansion').is(":visible")){
                    $('#'+ exp_id +'_expansion').hide();
                    this.parentElement.classList.remove('expanded');
					this.parentElement.classList.add('collapsed');
                    if(typeof $(this).attr('aria-label')!=="undefined")
                        $(this).attr('aria-label',$(this).attr('aria-label').replace("expanded","collapsed"));
                }else{
                    $('#'+ exp_id +'_expansion').show();
                    this.parentElement.classList.remove('collapsed');
					this.parentElement.classList.add('expanded');
                    if(typeof $(this).attr('aria-label')!=="undefined")
                        $(this).attr('aria-label',$(this).attr('aria-label').replace("collapsed","expanded"));
                }
            });

        });
})(jQuery);