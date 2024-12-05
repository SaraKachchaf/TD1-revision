<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme de deux nombres</title>
</head>
<body>

    <form method="POST" action=<?php  echo $_SERVER["PHP_SELF"]  ;  ?>>
  
      <select name="role" id="" >
        <option value="admin"> admin</option>
        <option value="utilisateur"> utilisateur</option>


      </select>
        <input type="submit" name="sub">        
    </form>

    <?php
    
    if (isset($_POST["role"])){
               $n1 = $_POST["role"]; 

               if($n1== "admin"){
                 echo "Bienvenue, administrateur !<br> ";
                 }else{
                     echo "Bienvenue, utilisateur !<br>";
                 }
    }
       
    
    ?>

</body>
</html>
