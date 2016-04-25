<?php
$current = 'contact';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Contact - Andrea Pereira de Almeida</title>
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
  

</head>
<body>
<?php include 'includes/header.php'; ?>


<div class="index_start">
</div>


<div class="contact">
	<div class="contact__container">


		
		<form method="post" action="contactengine.php">

			<h1>Get in touch</h1>

			<label for="Name">Name</label>
			<input type="text" name="Name" id="Name" />
	
			<label for="Email">Email</label>
			<input type="text" name="Email" id="Email" />
				
			<label for="Message">Message</label><br />
			<textarea name="Message" id="Message"></textarea>

			<div class="submit_button">
				<input type="submit" name="submit" value="Send message" class="submit-button" />
			</div>
		</form>

	</div>
</div>



</body>

<?php include 'includes/footer.php' ?>

</html>