<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Error 404 - Not Found</title>
	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Droid+Sans);
	body{
		font-family:'Droid Sans', sans-serif;
		font-size:10pt;
		color:#fff;
		background-color: #000;
		background-image:url('/img/404.png');
		background-repeat:no-repeat;
		line-height: 25px;
	}
	.wrapper {
		width:600px;
		margin:1em;
	}
	.main {
		overflow:hidden;
	}
	.error-spacer	{
		height:26em;
	}
	a, a:visited {
		color:#FF0000;
	}
	a:hover {
		color:#00FF00;
	}
	img.bg {
		/* Set rules to fill background */
		height: 400px;
		width: 600px;
		z-index: -1;
		position: fixed;
		top: 0;
		left: 0;
		border: 0;
	}
	#eyes1 {
		width:75px;
		height:25px; 			
		top:322px;
		left:8px;
	}
	#eyes2 {
		width:17px;
		height:25px; 			
		top:244px;
		left:188px;
	}
	#eyes3 {
		width:50px;
		height:25px; 			
		top:215px;
		left:330px;
	}				
	.eyelids {
		background-color:black;
		position: absolute;
		z-index: 5;
	  -webkit-opacity: 0.25;
	  -moz-opacity: 0.25;
	  opacity: 0.25;
		-webkit-transition: all 1s ease;
	  -moz-transition: all 1s ease;
	  -ms-transition: all 1s ease;
	  -o-transition: all 1s ease;
	  transition: all 1s ease;
	} 
	#eyes1:hover, #eyes2:hover, #eyes3:hover {
	  -webkit-opacity: 1;
	  -moz-opacity: 1;
	  opacity: 1;
	}
	</style>
</head>
<body>
	<audio id="swamp1" preload autoplay>
		<source src="/audio/swamp1_404.ogg">
	  <source src="/audio/swamp1_404.wav">
	  <source src="/audio/swamp1_404.mp3">
	</audio>
	<audio id="swamp2" preload autoplay>
	  <source src="/audio/swamp2_404.ogg">
	  <source src="/audio/swamp2_404.wav">
	  <source src="/audio/swamp2_404.mp3">
	</audio>	
	<div class="wrapper">
		<div class="error-spacer"></div>
		<div role="main" class="main">
			<img src="img/404.png" class="bg" onerror="this.style.display='none'" alt="Scary eyes on  a back background - don't want to hang out here..."/>
			<div class="eyelids" id="eyes1"></div>
			<div class="eyelids" id="eyes2"></div>
			<div class="eyelids" id="eyes3"></div>
			<?php $messages = array('Ooh, scary!', 'Umm, I think you\'re lost...', 'Yikes, we took a wrong turn!', 'Looks like we\'re not in Kansas anymore Toto!', 'Help, I\'ve 404\'d and I can\'t get up!'); ?>

			<h1><?php echo $messages[mt_rand(0, 4)]; ?></h1>

			<h2>Server Error: 404 (Not Found)</h2>

			<p>
				We don't know how you got here,<br/>
				but if you grab on to this <?php echo HTML::link('/', 'rope'); ?>, we'll pull you back to safety. 
			</p>
		</div>
	</div>
	<script src='js/vendor/jquery-1.8.2.min.js'></script>
	<script>
	document.getElementById('swamp1').addEventListener('ended', function(){
		this.currentTime = 0;
		this.pause();
		document.getElementById('swamp2').play();
	}, false);
 
	document.getElementById('swamp2').addEventListener('ended', function(){
		this.currentTime = 0;
		this.pause();
		document.getElementById('swamp1').play();
	}, false);
</script>
</body>
</html>