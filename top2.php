<!DOCTYPE html>
<html>
	<head>
	<title>Toppi etsin!</title>
	<!----linkit tyyleihin ja skripteihin että saadaan toimimaan tyylit ja scriptit-->
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body>
<div class="header">
  <h1>Työssoppimispaikan etsin!</h1>
</div>
<!---ylävalikko--->
<div class="topnav">
  <a href="#">Admin login</a>
</div>
<!---sivuvalikko--->
<ul class="sivuvalikko">
  <li class = "sivuvalikko2"><a class="active" href="top2.php">Etusivu</a></li>
  <li class = "sivuvalikko2"><a href="yhteydenotto.php">Yhteydenotto</a></li>
  <li class = "sivuvalikko2"><a href="tietoa.php">Tietoa</a></li>
</ul>
<!---Formi tietokanta etsintään--->
   <div class="sisalto">
	<br>
	<form action="top2.php" method="get" class="formi">
	<P>Valitse työtehtävä</p>
    <select select multiple data-placeholder="Valitse mitä etsitään" class="chosen-select" name="valinta">
        <option hidden selected value=""></option>
        <option value="ohjelmointi">Ohjelmointi</option>
        <option value="it tuki">It-tuki/asiakaspalvelu</option>
        <option value="testaus">ohjelmistotestaus</option>
        <option value="korjaaja">huolto/kokoonpano</option>
        <option value="verkko">tietoverkot</option>
        <option value="asentaja">sahkoasennus</option>
    </select>
	<p>Valitse paikkakunta</p>
	    <select select multiple data-placeholder="Valitse mitä etsitään" class="chosen-select" name="valinta2">
        <option hidden selected value=""></option>
        <option value="jamsa">jamsa</option>
        <option value="jyvaskyla">jyvaskyla</option>
        <option value="muurame">muurame</option>
        <option value="tampere">tampere</option>
    </select>
<!---scripti chosen plugin toimintaan--->
		<script src="jquery.min.js"></script>
		<script src="chosen.jquery.min.js"></script>
		<script type="text/javascript">
			$(".chosen-select").chosen
			({
				allow_single_deselect: true

			});
		</script>
	<br>
	<input type="submit" name="namiska" value="Etsi paikkoja">
	</form>
<?php
{
	// php koodi queryyn ja tietokanta yhteyteen
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "toppipaikat";
	$yhteys = mysqli_connect($servername,$username,$password,$database);
	
			if(!$yhteys) 
		{
			die('Yhteys tietokantaan epäonnistui: ' . mysqli_connect_error()); 
		}
			else 
		{ 
			echo "Yhteys tietokantaan onnistui!";
		}
	$etsi=$_GET['valinta']?? "";
	$etsi2=$_GET['valinta2']?? "";
	echo "<br>", "<br>";
	// sql query 
	$kysely = "SELECT * FROM paikat WHERE  paikkakunta LIKE '%$etsi'";
	$kysely2 = "SELECT * FROM tyot WHERE  tehtava LIKE '%$etsi2'";
	$result = mysqli_query($yhteys,$kysely);
	
		if (mysqli_num_rows($result)>0) {
			while($row = $result->fetch_assoc()) 
	{
			echo $row["nimi"].$row["paikkakunta"]."<br>";
	}
} 
	
	$result2 = mysqli_query($yhteys,$kysely2);
	
		if (mysqli_num_rows($result2)>0) 
	
			while($row = $result->fetch_assoc()) 
	{
			echo $row["tehtava"]."<br>";
	}
	else 
	{
		echo "0 tulosta";
	}
}
?>
</div>
<!---footer--->
<div class="footer">
	<br>
	<h3>&copy; 2022 Andreas Vilander t00t
	<?php
	// kellonaika skripti
		echo "<br>";
		date_default_timezone_set("Europe/Helsinki");
		echo "<br>";
		echo "Aika on " . date("h:i");
	?>
	</h3>
</div>
	</body>
</html>
