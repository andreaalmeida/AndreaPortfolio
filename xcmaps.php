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
			<p>The proof of concept for a web app that enables runners, coaches, and spectators to view 
				and interact with college cross country courses.</p>
		</div>

	</div>

<div class="process">

	<div class="planning">
		<h1 class="planningh">Planning<h1>
	</div>

	<ul class="process__blocks">
		<li class="process__blocks__one">
			<img src="images/xcmaps/xcmaps_sketch_1@2x.jpg" width="100%">
			<p class="process__blocks__one__title">Mobile and desktop views</p>
		</li>
		<li class="process__blocks__two">
			<img src="images/xcmaps/xcmaps_sketch_2@2x.jpg" width="100%">
			<p class="process__blocks__two__title">Map functionality planning</p>
		</li>
		<li class="process__blocks__three">
			<img src="images/xcmaps/xcmaps_sketch_3@2x.jpg" width="100%">
			<p class="process__blocks__three__title">Logo design</p>
		</li>
	</ul>
</div>


<div class="description">
	<div class="description__container">

		<div class="planning">
			<h1 class="planningh">Process<h1>
		</div>

		<h2>My role</h2>
		<p>Producer and designer</p>

		<h2>The inspiration behind this project</h2>
		<p>I've competed in hundreds of cross country races from the time I was in middle school all the way through college. 
			Before a meet, my coach would hand out a map of the course and point out any tricky spots along the way. Most 
			of the maps were hand-drawn or crudely outlined on a static satellite image of the area.  They were difficult to 
			read and did little to prepare runners for what to expect on the course (hills, turns, etc.)  My parents usually 
			called me the day before a race to verify where the start and finish lines were and get directions to the course.  
			Cross country races are long and confusing for spectators who are trying to find specific mile markers on the course.  
			I wanted to create an interactive map to make spectators’ lives easier and allow runners to become familiar with a 
			course before even stepping foot on it.
		</p>

		<h2>Map functionality</h2>
		<h3>For spectators</h3>
		<p>Spectators can use the map on their phones to find their current location on the course. They can also use it to find 
			the start and finish line, as well as any of the other mile marker on the course. Before a race, spectators can use 
			the map to find relevant meet information like driving directions, where to park, race schedules, and bathroom locations.
		</p>

		<h3>For runners and coaches</h3>
		<p>Runners and coaches can use the map to see more detailed information about the course. The map shows elevation along the 
			course, allows runners to virtually run the course with the course animation feature, shows both satellite and map views, 
			and provides a street view in select locations so that runners can virtually tour the course.
		</p>

		<h2>The technology</h2>
		<p>I built this web app with html, css, javascript, Google Maps API, Facebook API, and Instagram API. I also created a separate 
			.json file to store individual map data points - making it easy to add more courses in the future.
		</p>

		<h2>The results</h2>
		<p>The result is an interactive map where runners, spectators, and coaches can learn more about a cross country course and 
			share relevant information with one another.   

		</p>

		
	</div>

	</div>

	<div class="process">

	<div class="planning">
		<h1 class="planningh">Results<h1>
	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_1@2x.jpg" width="100%">
		<p class="description__container__title">Elon University Men's course</p>
	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_2@2x.jpg" width="100%">
		<p class="description__container__title">Logo design</p>
	</div>

	<div class="description__container">
		<img class="result" src="images/xcmaps/xcmaps_result_3@2x.jpg" width="100%">
		<p class="description__container__title">Mobile and desktop views</p>
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