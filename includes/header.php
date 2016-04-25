<?php
date_default_timezone_set ( ‘America/Chicago’ );
?>
<nav class="header">
	<div class="header__wrapper">
		<ul class="header__left">
			<li>
				<a href="index.php" class="header-bar__logo"><img src="images/logo_home4@2x.png"></a>
				<a href="index.php" class="header-bar__title"></a>
			</li>
		</ul>
		<ul class="header__right">
			<li <?php if( $current == 'portfolio' ) { echo 'class="current"'; } ?>><a href="index.php">Portfolio</a></li>
			<li <?php if( $current == 'about' ) { echo 'class="current"'; } ?>><a href="about.php">About</a></li>
			<li <?php if( $current == 'contact' ) { echo 'class="current"'; } ?>><a href="contact.php">Contact</a></li>
		</ul>


		<ul class="header__mobile">
			<button></button>
			<div>
				<li class="firsttoplink">
				<a class="activeLink" href="index.php">Portfolio</a>
				</li>
				<li class="toplinks">
				<a href="about.php">About</a>
				</li>
				<li class="toplinks">
				<a href="contact.php">Contact</a>
				</li>
			</div>
		</ul>

	</div>
</nav>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




