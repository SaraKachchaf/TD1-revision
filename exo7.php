
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nom : <input type="text" name="nom" required><br><br>
        Age : <input type="number" name="age" required><br><br>
        <input type="submit" value="Send" name="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $age = $_POST["age"];



    if (filter_var($age, FILTER_VALIDATE_INT) && $age > 0) {
        echo "Le nom est $nom et son âge est $age ans.";
    } else {
        echo "<p style='color: red;'>Erreur : Veuillez entrer un âge valide (un entier supérieur à 0).</p>";
    }
    
   
}
?>
