
<?php
		
		/*	Verbinden mit der Datenbank - Quelle www.php.net  und w3schools	*/
		$link = mysqli_connect("localhost", "root", "", "boox");

?>


<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	
	
	<style>
		table, td, th {
			padding: 10px;
		}
		body {
			padding: 10%;
		}
		}
	</style>

</head>

<body>
	<h1>Boox Datenbank</h1>
	<a href="index.php?abc_sort=true" class="btn btn-success" role="button">Nach Name ABC sortieren</a>
	<a href="index.php?id_sort=true" class="btn btn-success" role="button">Nach ID sortieren</a>
	<a href="index.php?katzenbaby=true" class="btn btn-success" role="button">Katzenbabies</a>
	<table class="table table-striped">
			<th>id</th>
			<th>name</th>
			<th>mail</th>
			<th>password</th>
			
			<?php
				
				
				if (isset($_GET['abc_sort'])) {
					$stmt = "SELECT * FROM `user` ORDER BY name ASC";
						$result = $link->query($stmt);
						while ($row = mysqli_fetch_row($result)){
							echo "<tr>\n";
							echo "<td>" . $row[0] . "</td>\n";
							echo "<td>" . $row[1] . "</td>\n";
							echo "<td>" . $row[2] . "</td>\n";
							echo "<td>" . $row[3] . "</td>\n";
							echo "<tr>\n";
						}
				} 
				
				else if (isset($_GET['id_sort'])) {
						$stmt = "SELECT * FROM `user` ORDER BY id ASC";
						$result = $link->query($stmt);
						while ($row = mysqli_fetch_row($result)){
							echo "<tr>\n";
							echo "<td>" . $row[0] . "</td>\n";
							echo "<td>" . $row[1] . "</td>\n";
							echo "<td>" . $row[2] . "</td>\n";
							echo "<td>" . $row[3] . "</td>\n";
							echo "<tr>\n";
				} 
				
				if (isset($_GET['katzenbaby'])) {
							echo "<tr>\n";
							echo "<td>Katzenbaby</td>";
							echo "<tr>\n";
							}
				}
				else {
					$stmt = "SELECT * FROM `user`";
					$result = $link->query($stmt);
					while ($row = mysqli_fetch_row($result)){
							echo "<tr>\n";
							echo "<td>" . $row[0] . "</td>\n";
							echo "<td>" . $row[1] . "</td>\n";
							echo "<td>" . $row[2] . "</td>\n";
							echo "<td>" . $row[3] . "</td>\n";
							echo "<tr>\n";
				}
				}
				
										
			?>
			
					
	</table>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</body>

</script>