'use strict';
$(function() {
	var $range = $("#inputRange"),
		$input = $("#inputRangeinput"),
		instance,
		min = parseInt($input.attr('min')) || 50,
		max = parseInt($input.attr('max')) || 15000;
	
	var azbn__sendChangeTrigger = function(val) {
		
		var item = $input.closest('.azbn__calc__field_new');
		
		item.trigger('azbn7.ui.calc.field_new.change', [{
			uid : item.attr('data-uid'),
			visible_value : val,
			value : val,
		}]);
		
	}

	$range.ionRangeSlider({
		grid: false,
		type: "single",
		min: min,
		max: max,
		step: parseInt($input.attr('step')) || 50,
		from: parseInt($input.attr('value')),
		onStart : function (data) {
			
			$input.prop('value', data.from);
			
			//azbn__sendChangeTrigger(data.from);
			
		},
		onChange : function (data) {
			
			$input.prop('value', data.from);
			
			//azbn__sendChangeTrigger(data.from);
			
		},
		onFinish : function (data) {
			
			$input.prop('value', data.from);
			
			azbn__sendChangeTrigger(data.from);
			
		},
	});
	
	$input.on('change keyup click', function (event) {
		event.preventDefault();
		
		var val = $(this).prop('value');
		
		// validate
		if (val < min) {
			val = min;
		} else if (val > max) {
			val = max;
		}
		
		instance.update({
			from: val
		});
		
		azbn__sendChangeTrigger(val);
		
	});
	
	instance = $range.data("ionRangeSlider");
	
});