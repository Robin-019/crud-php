<?php
// require "(CONFIG NAAR DATABASE)";

$id = $_GET['id'];

$query = "DELETE FROM (TABEL) WHERE (ITEM) = " . $id;
$result = mysqli_query($conn, $query);

if ($result)
{
    echo "Item met de record " . $id . " is verwijderd<br/>";
}

else
{
    echo "FOUT bij verwijderen<br/>";
    echo $query . "<br/>";
    echo mysqli_error($conn);
}

echo "<a href='leesuit.php'>OVERZICHT</a>";
