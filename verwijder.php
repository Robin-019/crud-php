<?php
// require "(CONFIG NAAR DATABASE)";

$id = $_GET['id'];
$operator = $_GET['operator'];
$gadget = $_GET['gadget'];

if ($id != "") 
{
    echo "Weet je zeker dat je record " . $id . " wilt verwijderen? <br/>";
    echo "Je verwijdert een item met de volgende gegevens; <br/>";
    echo "Operator = " . $operator . ", Gadget = ". $gadget . "<br/><br/>";
    echo "<a href='verwijder_verwerk.php?id={$id}'> JA </a> <br/><br/>";
}

else
{
    echo "Geen ID gevonden...<br/>";
}
echo "<a href='leesuit.php'>OVERZICHT</a>";
