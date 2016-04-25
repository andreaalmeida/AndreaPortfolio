<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Andrea Pereira de Almeida</title>
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
  

</head>
<body>
<?php include 'includes/header.php'; ?>

	<div class="index_start"></div>

	<div class="project__purple">

		<div class="project__purple__container">

			<h1 class="project__purple__container__h1">XC Maps</h1>
			<p>A proof of concept for a web app that enables runners, coaches, and spectators to view 
				and interact with college cross country courses.</p>
		</div>

	</div>

<div class="process">
	<ul class="process__blocks">
		<li class="process__blocks__one">
			<img src="images/xcmaps/xcmaps_sketch_1@2x.jpg" width="100%">
			<p class="process__blocks__one__title">Cart and filter ideas</p>
		</li>
		<li class="process__blocks__two">
			<img src="images/xcmaps/xcmaps_sketch_2@2x.jpg" width="100%">
			<p class="process__blocks__two__title">Purchase flow</p>
		</li>
		<li class="process__blocks__three">
			<img src="images/xcmaps/xcmaps_sketch_3@2x.jpg" width="100%">
			<p class="process__blocks__three__title">Use cases</p>
		</li>
	</ul>
</div>


<div class="description">
	<div class="description__container">
		<h2>My role</h2>
		<p>Producer and designer</p>

		<h2>The inspiration behind this project</h2>
		<p>I've been a runner since I was twelve and have competed in hundreds of cross country races. Before a meet my 
			coach would hand out a map of the course and point out any tricky spots along the way. Most of maps were hand-drawn 
			or crudely outlined on a static satellite image of the area. Unless we arrived at the course a day early to run it, 
			I really didn’t have a great understanding about where it went, the hills, bends, etc. Sometimes maps were posted 
			on a university's website for spectators to see as well, but that was pretty rare. My parents would usually call 
			me the day before a race to verify where the start and finish lines were and to get directions to the course. 
			Cross-country races are typically run on a golf course, in an open field, or through a combination of fields 
			and woods. It's almost never a straight out and back, meaning that it can be pretty easy for spectators to get 
			turned around trying to find different mile markers along the course. I wanted to create an interactive map to make 
			spectators' lives a little easier and allow runners to get to know a course before even stepping foot on it.

		</p>

		<h2>Map functionality</h2>
		<h3>For spectators</h3>
		<p>Spectators can use the map on their phones to find their current location on the course and point them towards
			a mile marker or start and finish lines.  Before a race, they can find relevant meet information like driving directions, where to park,
			race schedules and bathroom locations.</p>

		<h3>For runners and coaches</h3>
		<p>Runners and coaches can use the map to see more detailed information about the course.
		The map shows elevation along the course, allows runners to virtually run the course with the course animation feature, 
		shows both satellite and map views and provides street view in select locations so that runners can virtually tour the course.
		</p>

		<h2>The technology</h2>
		<p>I built this web app with html, css, javascript, Google Maps API, Facebook API, Instagram API and created
		a separate .json file to store individual map data points - allowing for easy addition of future courses.
		</p>

		<h2>The results</h2>
		<p>The result is an interactive map where runners, spectators and coaches can learn more about a cross country course
			and any relevant meet infomation as well as communicate with fellow runners, spectators and coaches.  
		</p>

		

	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_1@2x.jpg" width="100%">
	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_2@2x.jpg" width="100%">
	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_3@2x.jpg" width="100%">
	</div>

	<div class="description__container">
		<p class="description__container__titleNew">
			<a href="http://www.xcmaps.com" target="_blank" class="clickableButton">See the site</a>
		</p>
	</div>

</div>

</body>

<?php include 'includes/footer.php'; ?>

</html>