<html>
    <head>
        <title>Gegevens aanpassen</title>
    </head>
    <body>
    <?php
    
// require "(CONFIG NAAR DATABASE)";

$id = $_GET['(ITEM)'];

echo "ID van agenda-item is: " . $id . "<br/>";

$query = "SELECT * FROM (TABEL) WHERE (ITEM) = " . $id;

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0)
{
    $item = mysqli_fetch_assoc($result);

    ?>
    <form name="aanpasFormulier" method="post" action="pasaan_verwerk.php">
        <input type="hidden" name="idVeld" required value="<?php echo $item['(ITEM)'];?>"/>
    <table>
        <tr>
            <h1>Pas de gegevens van de desbetrefende operator aan!</h1>
            </br>
            <td>Operator:</td>
            <td><input type="text" name="operatorVeld" required minlength="2" maxlength="11" value="<?php echo $item['(ITEM)'];?>"></td>
        </tr>
        <tr>
            <td>Gadget:</td>
            <td><textarea name="gadgetVeld" required><?php echo $item['(ITEM)'];?></textarea></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name="genderVeld" required>
                    <option value="f"<?=$item['(ITEM)'] == 'f' ? ' selected="selected"' : '';?>>Female</option>
                    <option value="m"<?=$item['(ITEM)'] == 'm' ? ' selected="selected"' : '';?>>Male</option>
                    <option value="o"<?=$item['(ITEM)'] == 'o' ? ' selected="selected"' : '';?>>Other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Leeftijd:</td>
            <td><input type="number" name="leeftijdVeld" required min="0" max="100" value="<?php echo $item['(ITEM)'];?>"></td>
        </tr><tr>
            <td>Side:</td>
            <td>
                <select name="sideVeld" required>
                    <option value="A"<?=$item['(ITEM)'] == 'A' ? ' selected="selected"' : '';?>>Attacker</option>
                    <option value="D"<?=$item['(ITEM)'] == 'D' ? ' selected="selected"' : '';?>>Defender</option>
                </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="verzend" value="item aanpassen"></td>
        </tr>
    </table>
</form>
<?php
	
}

else 
{
	 echo "Er is geen record met ID: " . $id . "<br/>";
}

echo "<a href='leesuit.php'>OVERZICHT</a>";
?>
</body>
</html>
