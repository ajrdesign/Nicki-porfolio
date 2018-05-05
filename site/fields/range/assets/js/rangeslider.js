(function ($) {
	$(document).ready(function() {

		if (app && typeof app == 'object') {
			$(app.modal).on('view:load', addRange);
			$(app.main).on('view:load', addRange);
		}


		function addRange() {
			var $rangeslider = $('.rangeslider');
			$rangeslider.after(function() {
  				return "<span class=\"range-output\" id=" + this.name + ">" + this.value + "px</span>";
			});

    		function updateRange(){
    			var value = this.value;
    			var max = this.max;
    			var min = this.min;
    			var total = Math.abs(max)+Math.abs(min);
				var unit = $(this).attr('unit');
				
				if(typeof unit == "undefined"){
					var unit = "";
				}

    			//If min is negative apply shift
    			if(this.min < 0){
    				var shift = Math.abs(min);
    				var min = parseInt(min)+parseInt(shift);
    				var max = parseInt(max)+parseInt(shift);
    				var value = parseInt(value)+parseInt(shift);
    			}
    			var change = (value/max)*100;
				$("#"+this.name).html("<span>" + this.value + unit + "</span>");
				$("#"+this.name+" span").css( "left", change + "%");
    		}

    		$rangeslider.each(updateRange);
			$rangeslider.mousemove(updateRange);
			$rangeslider.change(updateRange);

		}
	
	});
} (jQuery));