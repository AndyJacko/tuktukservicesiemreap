(function($) {
$(document).ready(function(){
	$("area[rel^='prettyPhoto']").prettyPhoto();
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({allow_expand: false,counter_separator_label: ' of ',overlay_gallery: false,social_tools: false,deeplinking: false,theme:'light_rounded',autoplay_slideshow: false});
});
})(jQuery);

$(function() {
  $("#form").validate({
	  rules: {
		  YourName: "required",
		  YourComment: "required",
		  YourEmail: {
			  required: true,
			  email: true
		  },
	  },
	  messages: {
		  YourName: "Please enter your name",
		  YourComment: "Please enter message",
		  YourEmail: "Please enter a valid email address",
	  },
	  
	  submitHandler: function(form) {
		  form.submit();
	  }
  });
});