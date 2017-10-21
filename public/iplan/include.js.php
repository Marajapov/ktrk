<script>
	$('.datepicker').datetimepicker({
		locale: 'ru',
		format: 'L',
		icons: {
			previous: "dp-icon dp-icon-previous",
			next: "dp-icon dp-icon-next",
		}
	});

	// for 4 weeks		
   function getNextMonday(){
      return moment().add(1, 'weeks').isoWeekday(1);
   }
	$('.datepicker-with-dd').datetimepicker({
		locale: 'ru',
		format: 'L',
		icons: {
			previous: "dp-icon dp-icon-previous",
			next: "dp-icon dp-icon-next",
		},
		minDate: getNextMonday(), 
		maxDate: moment(getNextMonday()).add(27, 'days')
	});

	$('.timepicker').datetimepicker({
		locale: 'ru',
		format: 'LT',
		icons: {
			up: "dp-icon dp-icon-up",
			down: "dp-icon dp-icon-down"
		}
	});
</script>