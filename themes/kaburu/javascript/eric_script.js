// jQuery.noConflict(); //working without this

(function($) {
	$(document).ready(function(){
    	 //alert("good");
   		// $('.size3of4').css({'background-color':'red'});
   		/*var x = document.getElementsByClassName("size3of4");
   		x[0].style.backgroundColor = "red";*///This raw javascript works too


   		$('.autocomplete').on('keyup', '#sin', function(e) {
   			
   			// alert(typeof(e.keyCode));
   			 alert("watsup");
   			//test for non printable keys
   			if((e.keyCode != 8) && (e.keyCode != 13)){

	  			var resultsEl = $('.results'); //get the sibling to the textfield with the class results
	  			// alert($(this).parent().attr('class'));
	  			// alert($(this).parent().metadata().url);
	  			// alert(e.keyCode);
	  			//alert($(this).attr('id'));
	  			// alert($(this.form).serialize());
	  			resultsEl.load(
		    		// get form action, using the jQuery.metadata plugin... where we sending the data
		    		$(this).parent().metadata().url,

		    		// submit all form values...data we sending
		    		$(this.form).serialize(),

		    		// callback after data is loaded
				    function(data, status, xhr) {
				    	 alert(status);
				     /* resultsEl.show();

				      // get all record IDs from the new HTML
				      var ids = jQuery('.results').find('li').map(function() { 
				        return $(this).attr('id').replace(/Record\-/,''); 
				      });*/
				    }
	 		 	);
 		 	}

		});



    });//end doc ready
})(jQuery);