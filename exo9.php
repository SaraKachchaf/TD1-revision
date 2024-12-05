<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

  <form method="GET" action="<?php  echo $_SERVER["PHP_SELF"]  ;  ?>" >
  
  NUMBER1<input type="number" name="nb1"><br><br>
  NUMBER2<input type="number" name="nb2"><br><br>


<input type="submit" name="but" value="Calculer la somme">

  </form>
 
</body>
</html>
<?php
    $somme = 0;
  if ($_SERVER["REQUEST_METHOD"] == "GET"  && isset($_GET["nb1"], $_GET["nb2"])) {
  
   $n1=is_numeric($_GET["nb1"])? $_GET["nb1"] : 0;; 
  $n2=is_numeric($_GET["nb2"])? $_GET["nb2"] : 0;;
    $somme= $n1 + $n2;

   echo "<p>La somme de $n1 et $n2 est : <strong>$somme</strong></p>";

}



?>