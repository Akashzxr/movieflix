$(document).ready(function(){
	
	$(".movie-image").hover(function(){
		$(this).find(".play").css("display","flex");

	},
	function()
	{
		$(this).find(".play").hide();
	});


	$(".blink").focus(function() {
            if(this.title==this.value) {
                this.value = '';
            }
        })
        .blur(function(){
            if(this.value=='') {
                this.value = this.title;                    
			}
		});
});
