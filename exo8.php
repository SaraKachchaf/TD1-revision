<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form  method="POST" action=" <?php echo $_SERVER["PHP_SELF"]; ?>" >  
     <select name="couleur[]" id="" multiple>
       <option value="rouge">rouge</option>
       <option value="vert">vert</option>
       <option value="bleu">bleu</option>
     </select>
     <input type="submit" name="submit" value="Send">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$couleur=$_POST["couleur"];
foreach ($couleur as $couleurs) {
 echo "<li>" . $couleurs . "</li>";
}

}
?>