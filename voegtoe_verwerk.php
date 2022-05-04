<?php
// require "(CONFIG NAAR DATABASE)";

//Is er een formulier verstuurd?
// -> check of de knop verstuurd:
if (isset($_POST['verzend']))
{
    //Lees alle velden uit en stop de waarde in variabelen
    $op    = $_POST['operatorVeld'];
    $gad    = $_POST['gadgetVeld'];
    $gen   = $_POST['genderVeld'];
    $age   = $_POST['leeftijdVeld'];
    $side   = $_POST['sideVeld'];

    //Maak een toevoeg-query (let op verschillende aanhalingstekens!)
    $query = "INSERT INTO (TABEL) ((ITEM), (ITEM), (ITEM), (ITEM), (ITEM), (ITEM)) VALUES (NULL, '{$op}', '{$gad}', '{$gen}', '{$age}', '{$side}');";

    //Voer de query uit en vang het 'resultaat' op
    $result = mysqli_query($conn, $query);
    //Controlleer of het is gelukt
    if ($result)
    {
        echo "Het item is toegevoegd<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen<br/>";
        echo $query . "<br/>";
        echo mysqli_query($conn, $query);
    }
    echo "<a href='leesuit.php'>OVERZICHT</a>";
}
else
{
    echo "Het formulier is niet (goed) verstuurd<br/>";
}
