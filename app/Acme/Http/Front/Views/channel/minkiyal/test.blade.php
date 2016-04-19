<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head><!--/head-->

<body id="home" class="homepage">
<div class="container">   
    
<script type="text/javascript" src="http://radioheart.ru/tools/player.js"></script>
<div id="player"></div>
<script type="text/javascript">
    // Укажите ссылку на ваш поток
     var stream = 'http://s3.radioheart.ru:8005/nonstop';
     var autostart = 'false';
    // DO NOT EDIT ANYTHING BELOW THIS POINT
     var so = new SWFObject('http://www.fastserv.com/player/player.swf','mpl','470','20','9');
     so.addParam('allowscriptaccess','always');
     so.addParam('allowfullscreen','false');
     so.addVariable('autostart', autostart);
     so.addVariable('file', stream+'%3Ftype%3D.flv');
     so.write('player');
</script>
<div id="metadata">
  <p> <!-- Здесь появится название песни --> </p>
</div>    

</div>  
    
    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>