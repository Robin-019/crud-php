<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="voegtoe.php">Item Toevoegen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  		<a class="btn btn-light" href="./logout.php" role="button">Uitloggen</a>
		</div>
    </div>
  </div>
</nav>
</html>


<?php
// require "(CONFIG NAAR DATABASE)";

$sql = "SELECT * FROM (TABEL)";
$result = $conn->query($sql);

if (!$result)
{
	echo "<p>FOUT!</p>";
	echo "<p>" . $query . "</p>";
	echo "<p>" . mysqli_error($conn) . "</p>";
	exit;
}

if (mysqli_num_rows($result) > 0)
{
	echo "<table class='table table-dark table-striped'>";
	echo "<tr><th class='licht-grijs'>Operator</th><th class='licht-grijs'>Gadget</th><th class='licht-grijs'>Detail</th><th class='licht-grijs'>Verwijder</th><th class='licht-grijs'>Pas aan</th></tr>";
	
	while ($item = mysqli_fetch_assoc($result))
	{
		echo "<tr class='text-secondary'>";
			echo "<td class='text-secondary'>" . $item['(ITEM)'] . "</td>";
			echo "<td class='text-secondary'>" . $item['(ITEM)'] . "</td>";
			echo "<td>" . "<a class='link-secondary' href='detail.php?id=" . $item['(ITEM)'] . "'>Details</a>" . "</td>";
			echo "<td>" . "<a class='link-secondary' href='verwijder.php?id=" . $item['(ITEM)'] . "&operator=" . $item['(ITEM)'] . "&gadget=" . $item['(ITEM)'] . "'>Verwijderen</a>" . "</td>";
			echo "<td>" . "<a class='link-secondary' href='pasaan.php?id=" . $item['(ITEM)'] . "'>Aanpassen</a>" . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
}

else
{
	echo "<p>Geen items gevonden!</p>";
}

$conn->close();
?>
