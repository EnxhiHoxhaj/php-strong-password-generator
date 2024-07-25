<?php 

    include './functions.php';

    $condition= "Genera una password di lunghezza compresa fra 8 e 32";
    
    // controlliamo se il numero è valido o il parametro è vuoto
 if(isset($_GET['numero-caratteri']) && !empty($_GET["numero-caratteri"])){
    $numeroCaratteri = $_GET["numero-caratteri"];
    // var_dump($numeroCaratteri);
    // imposto la condizione di validità del numero inserito
    if ($numeroCaratteri >= 8 && $numeroCaratteri <= 32) {
        $condition= "la password generata per te é:". " ". generaPassword($numeroCaratteri);
    } else{ 
        // qualora la mia condizione di validità non viene rispaettata mi appare il messaggio di errore
        $condition= "Il numero selezionato non è valido: devi indicare un numero copreso tra 8 e 32";
        // echo $messaggioErrore;
    }
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
        <h4><?php echo $condition;?></h4>
        <form action="index.php">
            <label for="numero-caratteri">Lunghezza password: </label>
            <input type="number" name="numero-caratteri"> <br>
            <input type="submit" value="Genera">
            <button>
                <a href="index.php">Reset</a>
            </button>
        </form>
    </div>
    
</body>
</html>