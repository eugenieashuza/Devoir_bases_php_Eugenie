<?php
//1.les variables
$nom=eugenie;
$prenom=danais;
//affichage des variables
echo $nom;
echo $prenom;

//2.fonction

 function somme($nb1,$nb2)
{
    # code...
     $som=$nb1+$nb2;
     return $som;
    
}
//utilisation de la fonction somme
$som=somme(10,5);
echo $som;

//3. boucles
$i=0;
if($i<2){
do{
    $i=$i+1;
    echo $i;
}while($i<6);
}