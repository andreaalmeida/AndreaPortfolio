<?php
$startYear = 2016;
$thisYear = date('Y');
if ( $thisYear > $startYear ) {
	$copyright = "$startYear&ndash;$thisYear";
} else {
	$copyright = $startYear;
}
?>
<footer>
	<div class="footer__wrapper">
		<ul class="footer__column">
			<li class="title">Pages</li>
			<li class="content"><a href="index.php">Portfolio</a></li>
			<li class="content"><a href="about.php">About</a></li>
			<li class="content"><a href="contact.php">Contact</a></li>
		</ul>
		<ul class="footer__column">
			<li class="title">Connect</li>
			<li class="content"><a href="http://www.linkedin.com/in/andreapalmeida" target="_blank">LinkedIn</a></li>
			<!-- <li class="content"><a href="http://www.twitter.com/andreaalmeida" target="_blank">Twitter</a></li> -->
		</ul>
		<ul class="footer__column">
			<li class="title">Contact</li>
			<li class="content"><p>Andrea Pereira de Almeida</p></li>
			<li class="content"><a href="mailto:andreaalmeida@me.com?Subject=Hello%20Andrea">andreaalmeida@me.com</a></li>
			
		</ul>

		<div class="copyright">
			<p>&copy; <?php echo $copyright; ?> Andrea Pereira de Almeida</p>
		</div>

	</div>

	
</footer>