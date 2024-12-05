<?php
$noms_pays =array(
    "Maroc" => "36 680 178 " ,
    "Inde" => "1 428 627 663",
    "USA"=> "346 214 827" 
);
    arsort($noms_pays);
    foreach($noms_pays as $key => $value){
    echo " la population est : $value <br>" ;
}
?>