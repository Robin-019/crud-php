<?php
// require "(CONFIG NAAR DATABASE)";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Toevoegen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<form name="agendaFormulier" method="post" action="voegtoe_verwerk.php">
    <table>
        <tr>
            <h1>Voeg een rainbow six siege operator toe:</h1>
            </br>
            <td>Operator naam:</td>
            <td><input type="text" name="operatorVeld" required minlength="2" maxlength="11"></td>
        </tr>
        <tr>
            <td>Gadget:</td>
            <td><textarea name="gadgetVeld" required></textarea></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <select name="genderVeld" required>
                    <option value="f" selected>Female</option>
                    <option value="m" selected>Male</option>
                    <option value="o" selected>Other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Leeftijd:</td>
            <td><input type="number" name="leeftijdVeld" required min="0" max="100"></td>
        </tr><tr>
            <td>Side:</td>
            <td>
                <select name="sideVeld" required>
                    <option value="A" selected>Attacker</option>
                    <option value="D" selected>Defender</option>
                </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="verzend" value="Operator Toevoegen"></td>
        </tr>
    </table>
</form>
