<title>iPlan</title>
<meta charset="utf-8">
<meta content="ie=edge" http-equiv="x-ua-compatible">
<meta content="template language" name="keywords">
<meta content="Admin" name="author">
<meta content="Admin dashboard html template" name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="favicon.png" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">

<!-- Global styles -->
<link href="css/vendor/bootstrap/bootstrap.css" rel="stylesheet">

<link href="css/fullcalendar.min.css" rel="stylesheet">

<link href="css/vendor/font-awesome/font-awesome.css" rel="stylesheet">

<!-- Selectpicker styles -->
<link href="css/vendor/bootstrap-select/bootstrap-select.css" rel="stylesheet">

<!-- DateTime Picker styles -->
<link href="css/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker-build.css" rel="stylesheet">

<!-- Extra styles -->
<link href="css/vendor/build/build.css" rel="stylesheet">

<!-- Calendar styles -->		 
<link rel="stylesheet" href="css/listing.style.css" type="text/css">
<link rel="stylesheet" href="css/jquery.skeduler.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css">

<!-- User styles -->
<link href="css/style.css" rel="stylesheet"> <!-- global -->

<!-- Global scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jasny-bootstrap.min.js"></script>
<script>
	$(function(){
		var sidebar = $('.menu-w'),
		btnToggle = $('.btn-toggle');

		btnToggle.click(function(){
			sidebar.toggleClass('menu-open');
			if(sidebar.hasClass('.menu-open')){
			btnToggle.attr('title','Свернуть меню')
			} else {
			btnToggle.attr('title','Развернуть меню')
			}
		});
	});
</script>

<!-- Datetimepicker scripts -->
<script src="js/moment.min.js"></script>
<script src="js/transition.js"></script>
<script src="js/collapse.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/ru.min.js"></script>

<!-- Bootstrap select scripts -->
<script src="js/bootstrap-select.min.js"></script>
<script type="text/javascript">
	$('.selectpicker').selectpicker({
		iconBase: 'dp-icon',
		tickIcon: 'dp-icon-check',
	});
</script>

<!-- Tags srcipt -->
<script src="js/tagify.min.js"></script>

<!-- Calendar scripts -->
<script src="js/settings.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.skeduler.min.js"></script>
<script src="printThis.js"></script>


<?php $auth_user_id = $_SESSION["user_id"]; $auth_user = $db->select_one("users", "id='".$auth_user_id."'"); ?>