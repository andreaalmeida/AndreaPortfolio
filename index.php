<?php
$current = 'portfolio';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	  <title>Andrea Pereira de Almeida</title>
	  <link rel="stylesheet" href="stylesheets/normalize.css">
	  <link rel="stylesheet" href="stylesheets/styles.css">
	  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	</head>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49710728-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="index_start">
		</div>
		<div class="pageTitle--index">
			<div class="pageTitle__container">
				<h1 class="h1_white">Portfolio</h1>
				<p class="p_white">Design, art, research, and writing</p>
			</div>
		</div>
		<div class="blocks--index">
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<a href="fooda.php">
						<img src="images/index/index_fooda@2x.jpg" width="100%">
						<p class="caption">Fooda marketing website</p>
					</a>
				</li>
				<li class="blocks__row__two">
					<a href="ios.php">
						<img src="images/index/index_ios@2x.jpg" width="100%">
						<p class="caption">Fooda iOS app</p>
					</a>
				</li>
				<li class="blocks__row__three">
					<a href="menupages.php">
						<img src="images/index/index_menu@2x.jpg" width="100%">
						<p class="caption">Fooda web app</p>
					</a>
				</li>
			</ul>
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<a href="popup.php">
						<img src="images/index/index_popup@2x.jpg" width="100%">
						<p class="caption">Fooda popup</p>
					</a>
				</li>
				<li class="blocks__row__two">
					<a href="branding.php">
						<img src="images/index/index_branding@2x.jpg" width="100%">
						<p class="caption">Fooda branding</p>
					</a>
				</li>
		 		<li class="blocks__row__three">
					<a href="email.php">
						<img src="images/index/index_email@2x.jpg" width="100%">
						<p class="caption">Fooda email</p>
					</a>
				</li>
			</ul>
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<a href="marketing.php">
						<img src="images/index/index_marketing@2x.jpg" width="100%">
						<p class="caption">Fooda design sprint</p>
					</a>
				</li>
				<li class="blocks__row__two">
					<a href="portal.php">
						<img src="images/index/index_portal@2x.jpg" width="100%">
						<p class="caption">Fooda restaurant portal</p>
					</a>
				</li>
				<li class="blocks__row__three">
					<a href="terraba.php">
						<img src="images/index/index_terraba@2x.jpg" width="100%">
						<p class="caption">Tour Terraba</p>
					</a>
				</li>
			</ul>
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<a href="forms.php">
						<img src="images/index/index_forms@2x.jpg" width="100%">
						<p class="caption">Live Fooda style guide</p>
					</a>
				</li>
				<li class="blocks__row__two">
					<a href="rize.php">
						<img src="images/index/index_rize@2x.jpg" width="100%">
						<p class="caption">Rize branding</p>
					</a>
				</li>
				<li class="blocks__row__three">
					<a href="xcmaps.php">
						<img src="images/index/index_xcmaps@2x.jpg" width="100%">
						<p class="caption">XC Maps</p>
					</a>
				</li>
			</ul>
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<a href="writing.php">
						<img src="images/index/index_writing@2x.jpg" width="100%">
						<p class="caption">Connecting to Disconnect</p>
					</a>
				</li>
				<li class="blocks__row__two">
					<a href="art.php">
						<img src="images/index/art_sketch_5@2x.jpg" width="100%">
						<p class="caption">Art</p>
					</a>
				</li>
				<li class="blocks__row__three">
					<a href="photography.php">
						<img src="images/index/index_photo@2x.jpg" width="100%">
						<p class="caption">Photography</p>
					</a>
				</li>
			</ul>
		</div>


<!-- 		<div class="description">
			<div class="description__container"> -->
				<div class="preFooter">	
					<div class="preFooter__container">
						<h4>About this site</h4>
						<p>I designed this site in Illustrator and built it in Sublime Text with HTML, SASS, and PHP.  
							See my code on <a class="mail" href="https://github.com/andreaalmeida/AndreaPortfolio" target="_blank">Github</a>.</p>
						</p>
					</div>		
				</div>
		<!-- 	</div>
		</div> -->
	</body>
	<?php include 'includes/footer.php'; ?>
</html>