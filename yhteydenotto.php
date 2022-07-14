<!DOCTYPE html>
<html>
	<head>
	<title>Toppi etsin!</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" href="chosen.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			</script>
		<![endif]-->
		<meta name="description" content="Topin etsintään tehty työkalu Gradialle 2022" />
	</head>
<body>
<div class="header">
  <h1>Työssoppimispaikan etsin!</h1>
</div>
<div class="topnav">
  <a href="login.php">Admin login</a>
</div>
<ul class="sivuvalikko">
  <li class = "sivuvalikko2"><a class="active" href="top2.php">Etusivu</a></li>
  <li class = "sivuvalikko2"><a href="yhteydenotto.php">Yhteydenotto</a></li>
  <li class = "sivuvalikko2"><a href="tietoa.php">Tietoa</a></li>
</ul>
   <div class="sisalto">
		<form action="palaute.php" method="post">   
<b>Nimi:</b>   

	<br><input type="text" name="nimi">
	<br>
<b>Maili:</b>
	<br><input type="text" name="email">
	<br>
<b>Puhelinnro:</b>   
	<br>
		<input type="text" name="puhelin">
<br>
<b>Viesti:</b>   

	<br><textarea name="viesti" class="derp">   

</textarea><br>   

<br>

<input type="submit" value="Lähetä palaute">   

</form>   

</body>   

</html> 

 <?php 
  // $name = $_POST['nimi'];
  // $visitor_email = $_POST['email'];
  // $message = $_POST['viesti'];
  // $to = "*mihin viesti tulee*";
  // $headers = "From: $email_from \r\n";
  // $headers .= "Reply-To: $visitor_email \r\n";
  // mail($to,$email_subject,$email_body,$headers);
    // $email_from = '*tahan lahettajan nimi(eli sivusi)*';
    // $email_subject = "*aihe*";
    // $email_body = "*olet saanu viestin* $name.\n".
                            // "*tahan viesti*:\n $message".						
// ?>
	</div>
<div class="footer">
	<br>
	<h3>&copy; 2022 Andreas Vilander t00t
	<?php
		echo "<br>";
		date_default_timezone_set("Europe/Helsinki");
		echo "<br>";
		echo "Aika on " . date("h:i");
	?>
	</h3>
</div>
	</body>
</html>
