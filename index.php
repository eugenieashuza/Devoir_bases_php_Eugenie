<?php
//1.les variables
$nom  = "eugenie </br>";
$prenom = "danais";

//affichage des variables
echo $nom;
echo '</br>';
echo $prenom;

//2.fonction

 function somme($nb1,$nb2)
{
    # code...
     $som = $nb1 + $nb2;
     return $som;
    
}
//utilisation de la fonction somme

$som = somme(10,5);
echo '</br>';
echo $som;

//declaration et initialisation du compteur
$i=0;

    //3.la boucle
do{
    $i = $i + 1;
    echo '</br>';
    echo $i;
}while($i<6);

//4.la condition
$nb1 = 2;
$nb2 = 6;

if($nb2 > $nb1){
  $result = $nb2 - $nb1;
  echo '</br>';
  echo $result;
}else{
    $result = $nb2 + $nb1;
    echo '</br>';
    echo $result;
}

//5. boucle for

for($j=1;$j<5;$j++)
{

    echo "bienvenu";
    echo '</br>';
}

?>

