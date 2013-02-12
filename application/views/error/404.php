<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Error 404 - Not Found</title>
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Droid+Sans);

		body
		{
			font-family:'Droid Sans', sans-serif;
			font-size:10pt;
			color:#fff;
			background-color: #000;
			background-image:url('/img/404.png');
			background-repeat:no-repeat;
			line-height: 25px;
		}

		.wrapper
		{
			width:600px;
			margin:1em;
		}

		.main
		{
			overflow:hidden;
		}

		.error-spacer
		{
			height:26em;
		}

		a, a:visited
		{
			color:#FF0000;
		}

		a:hover
		{
			color:#00FF00;
		}
		img.bg {
			/* Set rules to fill background */
			max-height: 600px;
			min-height: 100%;
			min-width: 600px;
			z-index: -1;
			
			/* Set up proportionate scaling */
			width: 100%;
			height: auto;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
			border: 0;
		}

		@media screen and (max-width: 600px) { /* Specific to this particular image */
			img.bg {
				left: 50%;
				margin-left: -300px;   /* 50% */
			}
		}		
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="error-spacer"></div>
		<div role="main" class="main">
			<img src="img/404.png" class="bg" onerror="this.style.display='none'"/>
			<?php $messages = array('Ooh, scary!', 'Umm, I think we\'re lost...', 'Yikes, we took a wrong turn!', 'Looks like we\'re not in Kansas anymore Toto!', 'Help, I\'ve 404\'d and I can\'t get up!'); ?>

			<h1><?php echo $messages[mt_rand(0, 4)]; ?></h1>

			<h2>Server Error: 404 (Not Found)</h2>

			<p>
				We don't know how you got here,<br/>
				but grab on to this <?php echo HTML::link('/', 'rope'); ?> and we'll pull you back to safety. 
			</p>
		</div>
	</div>
</body>
</html>