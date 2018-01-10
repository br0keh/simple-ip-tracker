<!--

@Author: Vinicius Brokeh
@Twitter: Br0keh
@Github: viniciusbrokeh

-->

<?php 
// @ Include Tracker Class
include_once 'Tracker.Class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple IP Tracker</title>
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://use.fontawesome.com/6ed0465ccd.js"></script>
</head>
<body>
	<!-- @ Content -->
	<div class="content">
		<!-- @Track Form -->
		<div class="tracker-form">
			<form action="" method="post" name="track">
				<input type="text" name="ip" id="ip" placeholder="127.0.0.1" value="<?php if($_POST['ip']){ echo $_POST['ip']; } ?>">
				<input type="submit" name="trackip" id="track" value="Track">
			</form>
		</div>

	
		<?php

			if(isset($_POST['trackip'])){
				// @ Break Line
				echo "<br>";

				// @ Track IP
				$Tracker = new Tracker();
				$Tracker->track($_POST['ip']);


				// @ Print Response
				echo "<p><strong>CITY: </strong>".$Tracker->city."</p>";
				echo "<p><strong>COUNTRY: </strong>".$Tracker->country."</p>";
				echo "<p><strong>PROVIDER: </strong>".$Tracker->provider."</p>";
				echo "<p><strong>LATITUDE: </strong>".$Tracker->lat."</p>";
				echo "<p><strong>LONGITUDE: </strong>".$Tracker->lon."</p>";
				echo "<p><strong>TIMEZONE: </strong>".$Tracker->timezone."</p>";
			}

		?>

		<!-- @Track Form -->
		<div class="tracker-credits">
			<p class="github">
				<a href="https://github.com/viniciusbrokeh">
					<span title="Github"><i class="fa fa-github"></i> /viniciusbrokeh</span>
				</a>
			</p>
			<p class="twitter">
				<a href="https://twitter.com/Br0keh">
					<span title="Twitter"><i class="fa fa-twitter"></i> /Br0keh</span>
				</a>
			</p>
		</div>
		
	</div>
</body>
</html>