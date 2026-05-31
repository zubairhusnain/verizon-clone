jQuery(document).ready(function(){

    function goToByScroll(val) {
       jQuery('html,body').animate({
            scrollTop: $(val).offset().top - 250
        }, 500);
    }
    jQuery('.accordion-step-container .textimage .text a').click(function(e) {
        if (this.getAttribute("href") && this.getAttribute("href").startsWith("#")){
           /* e.preventDefault();*/
            goToByScroll(jQuery(this).attr('href'));
        }
    });
});
