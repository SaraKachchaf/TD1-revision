<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body> 
    <h1> Formulaire </h1>
     <form method="post" action=""<?php echo $_SERVER['PHP_SELF']; ?>>
        <label>Nom</label>
        <input type="text" name="nom" required><br><br>
        <label>Age</label>
        <input type="number" name="age" required><br><br>
        <button type="submit" name="submit">send</button>
        </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $age = $_POST["age"];
        
        echo " Le nom est ". $nom ." et son âge est ".$age ." ans ";
       }
    ?>
</body>
</html>