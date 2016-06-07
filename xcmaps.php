<!DOCTYPE HTML>
<html lang="en">
	<head>
	  	<meta charset="UTF-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	  	<title>XC Maps - Andrea Pereira de Almeida</title>
	  	<link rel="stylesheet" href="stylesheets/styles.css">
	  	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="index_start"></div>
		<div class="pageTitle--project">
			<div class="pagetitle__container">
				<h1 class="h1_gray">XC Maps</h1>
				<p class="p_gray">Cross country course maps for the 21st century</p>
			</div>
		</div>
		<div class="blocks">
			<ul class="blocks__row">
				<li class="blocks__row__one">
					<img src="images/xcmaps/xcmaps_sketch_1@2x.jpg" width="100%">
					<p class="caption">Mobile and desktop views</p>
				</li>
				<li class="blocks__row__two">
					<img src="images/xcmaps/xcmaps_sketch_2@2x.jpg" width="100%">
					<p class="caption">Map functionality planning</p>
				</li>
				<li class="blocks__row__three">
					<img src="images/xcmaps/xcmaps_sketch_3@2x.jpg" width="100%">
					<p class="caption">Logo design</p>
				</li>
			</ul>
		</div>
		<div class="description">
			<div class="description__container">
				<div class="description__container__title">
					<h2 class="categories">Process<h2>
				</div>
				<h3>My role</h3>
				<p>Producer and designer</p>
				<h3>The inspiration behind this project</h3>
				<p>I've competed in hundreds of cross country races from the time I was in middle school all the way through college. 
					Before a meet, my coach would hand out a map of the course and point out any tricky spots along the way. Most 
					of the maps were hand-drawn or crudely outlined on a static satellite image of the area.  They were difficult to 
					read and did little to prepare runners for what to expect on the course (hills, turns, etc.)  My parents usually 
					called me the day before a race to verify where the start and finish lines were and get directions to the course.  
					Cross country races are long and confusing for spectators who are trying to find specific mile markers on the course.  
					I wanted to create an interactive map to make spectators’ lives easier and allow runners to become familiar with a 
					course before even stepping foot on it.
				</p>
				<h3>Map functionality</h3>
				<h4>For spectators</h4>
				<p>Spectators can use the map on their phones to find their current location on the course. They can also use it to find 
					the start and finish line, as well as any of the other mile marker on the course. Before a race, spectators can use 
					the map to find relevant meet information like driving directions, where to park, race schedules, and bathroom locations.
				</p>
				<h4>For runners and coaches</h4>
				<p>Runners and coaches can use the map to see more detailed information about the course. The map shows elevation along the 
					course, allows runners to virtually run the course with the course animation feature, shows both satellite and map views, 
					and provides a street view in select locations so that runners can virtually tour the course.
				</p>
				<h3>The technology</h3>
				<p>I built this web app with html, css, javascript, Google Maps API, Facebook API, and Instagram API. I also created a separate 
					.json file to store individual map data points - making it easy to add more courses in the future.
				</p>
				<h3>The results</h3>
				<p>The result is an interactive map where runners, spectators, and coaches can learn more about a cross country course and 
					share relevant information with one another.   
				</p>
			</div>
		</div>
		<div class="results">
			<div class="results__container__title">
				<h2 class="categories">Results<h2>
			</div>
			<div class="results__container">
				<img class="result" src="images/xcmaps/xcmaps_result_1@2x.jpg" width="100%">
				<p class="caption">Elon University Men's course</p>
			</div>
			<div class="results__container">
				<img class="result" src="images/xcmaps/xcmaps_result_2@2x.jpg" width="100%">
				<p class="caption">Logo design</p>
			</div>
			<div class="results__container">
				<img class="result" src="images/xcmaps/xcmaps_result_3@2x.jpg" width="100%">
				<p class="caption">Mobile and desktop views</p>
			</div>
			
			<div class="projectNav">
				<a class="back" href="rize.php">&#8592; Previous project</a>
				<a class="next" href="writing.php">Next project &#8594;</a>
			</div>
		</div>
	</body>
	<?php include 'includes/footer.php'; ?>
</html>