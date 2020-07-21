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

//declaration et initialisation du compteur
$i=0;
//3.la condition
if($i<6){
    //4.la boucle
do{
    $i=$i+1;
    echo $i;
}while($i<6);

}