<?php 
 if(isset($_GET['numero-caratteri']) && !empty($_GET["numero-caratteri"])){
    $numeroCaratteri = $_GET["numero-caratteri"];
    var_dump($numeroCaratteri);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator!</title>
</head>
<body>
    <div>
        <h1>STRONG PASSWORD GENERATOR</h1>
        <h2>Genera una password sicura</h2>
        <div>Genera una password di lunghezza compresa fra 8 e 32</div>
        <form action="index.php">
            <label for="numero-caratteri">Lunghezza password: </label>
            <input type="number" name="numero-caratteri"> <br>
            <input type="submit" value="Invia">
            <input type="reset" value="Annulla">
        </form>
    </div>
    
</body>
</html>