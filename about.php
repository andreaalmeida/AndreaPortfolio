<?php
$current = 'about';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	  <title>About - Andrea Pereira de Almeida</title>
	  <link rel="stylesheet" href="stylesheets/styles.css">
	  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="index_start">
		</div>
		<div class="pageTitle--about">
			<div class="pageTitle__container">
				<h1 class="h1_white">About</h1>
				<p class="p_white">Who I am and what I love</p>
			</div>	
		</div>
		<div class="blocks--about">
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<img src="images/about/about_sketch_24@2x.jpg" width="100%">
				</li>
				<li class="blocks__row__two">
					<img src="images/about/about_sketch_9@2x.jpg" width="100%">
				</li>
				<li class="blocks__row__three">
					<img src="images/about/about_sketch_22@2x.jpg" width="100%">
				</li>
			</ul>
		</div>
		<div class="description">
			<div class="description__container">
				<div class="description__container__title">
					<h2 class="categories">Background<h2>
				</div>
				<h3>What I do</h3>
				<p>I improve people’s lives through design.</p>
				<h3>Education</h3>
				<h4>Elon University</h4>
				<p>Master of Arts in Interactive Media</p>
				<h4>Bowling Green State University</h4>
				<p>Bachelor of Science in Technology with a major in Visual Communication Technology</p>
				<h3>Tech skills</h3>
				<p>HTML, CSS, SASS, Wordpress, Photoshop, Illustrator, InDesign, Premiere, After Effects</p>
			</div>
		</div>
		<div class="results">
			<div class="results__container__title">
				<h2 class="categories">About me<h2>
			</div>
			<div class="results__container">
				<h3>I think differently</h3>
				<p>I love to solve problems in creative ways.  Challenges and constraints strengthen my resolve to design solutions.</p>
				<img class="result" src="images/about/about_result_12@2x.jpg" width="100%">
				<p class="caption">The selfie rake</p>
			</div>
			<div class="results__container">
				<h3>I'm a dreamer</h3>
				<p>I love to observe what is and dream up what could be.</p>
				<img class="result" src="images/about/about_result_11@2x.jpg" width="100%">
				<p class="caption">Dobby goes skiing</p>
			</div>
			<div class="results__container">
				<h3>I make my own tools</h3>
				<p>I was in the process of planning a road trip and I couldn't find a tool I liked to help me map it out. 
					I created my own trip planner using the Google Maps API, added some custom Javascript to the map, and 
					created markers for all the potential stops along the way.
				</p>
				<img class="result" src="images/about/about_result_8@2x.jpg" width="100%">
				<p class="caption">Road trip 2016</p>
			</div>
			<div class="results__container">
				<h3>Running is a big part of who I am</h3>
				<p>I've been a runner for as long as I can remember, competing in everything from 400 meters to 26.2 miles. 
					 Running is my way to reconnect with myself and my surroundings, and the mental strength 
					I gain from running extends to all the other areas of my life. </p>
				<img class="result" src="images/about/about_result_2@2x.jpg" width="100%">
				<p class="caption">Out running</p>
			</div>
			<div class="results__container">
				<h3>I'm always learning</h3>
				<p>If I’m not working towards a meaningful goal, I don’t feel alive.  Currently, I’m working hard to 
					become a better writer, exploring color theory, figuring out how to build sites using PHP, and learning
					how to juggle.</p>
				<img class="result" src="images/about/about_result_4@2x.jpg" width="100%">
				<p class="caption">Doing = happy</p>
			</div>
			<div class="projectNav"></div>
		</div>
	</body>
	<?php include 'includes/footer.php'; ?>
</html>