<?php
$etudiants =array(
    "etudiant 1" => array("score" => "8" ),
    "etudiant 2" => array("score"=> "5"),
    "etudiant 3" => array ("score" => "2"),
    "etudiant 4" => array ("score" => "6"),
    "etudiant 5" => array("score"=>"4")
);
$somme =0 ;
foreach($etudiants as $key => $value){
    foreach($value as $v ){
    $somme += $v;
    }
}
    $moyenne = $somme/sizeof($etudiants);
    echo "La moyenne des score : $moyenne <br>" ;
    ?>