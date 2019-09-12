<?php   //Balise ouvrante

// C'est un commentaire 



/*
c'est un commentaire sur plusieurs lignes
*/

echo "Bonjour c'est la D-WEB";
echo 'Bonjour c\'est la D-WEB';   // AltGr+8
echo "<p>Bonjour c'est la D-WEB</p>";

    
/* Une variable est un espace mémoire 

// Comment déclarer une variable en php ?
$nom_variable="";
$_nomVariable="";
$nomVariable=""; // cameCase
$NomVariable=""; //Déconseillé (commence par une Maj)

// ne pas faire 

/*$NOMVARIABLE;
$1variable;
$nom-variable;
$ nom variiable
$nomvariable
$nomFiliere="";
*/

$nomFiliere="D-WEB";


echo"Bonjour la $nomFiliere";
echo'Bonjour la $nomfiliere'; // guillemets simples n'est pas interprété 
echo"Bonjour la",$nomFiliere;
echo'Bonjour la',$nomFiliere,"c'est l'heure de manger";



//PHP ne fait pas de distinction entre les variables




//variables et les chiffres/nombres/additions

$a=1;
$b=100;
$c=$a+$b;

echo $c;
echo"Le résultat est: $c.";

$c +=$a;
echo $c;

echo $c+=$c;

// les comparaisons 

 // Depuis la V7 =====>( $a<=>$b)

 if(  $a !=$b )    
    {echo 1;
     echo 'true';
    
    
    }else
    {echo 0;
    echo 'false';
}


// afficher information d'une variable

var_dump($nomFiliere);
var_dump($e);


//afficher information d'une variable de manière lisible

print_r($nomFiliere);
print_r($e);


// tableaux
$tab=array();
$tab=[];

//données dans un tableau 

$tab=array("D-WEB", "PMSPA");
var_dump($tab);

//nombre colonne // index // valeur correspondant index+longeur de chaine 

$tab2=array($tab, $c, $e);
var_dump($tab2);


//tableau de 3 elements= array(3) qui sont: 
/*
-index 0= un tableau qui contient 2 elements
-index 1= une variable 
-index 2= une variable 
*/


//pour afficher un tableau 

echo $tab2[0][0]; 

//afficher toutes les valeurs d'un tableau 



//compter le nombre d'éléments dans un tableau 
$nbrElement= count($tab);

//boucle for 
for($i=0;$i < $nbrElement;$i++)
{
    //echo $i;
    echo $tab[$i];

}


// boucle foreach 

foreach($tab as $filiere)
{
    //afficher valeur tableau
    echo $filiere;
}


//afficher valeur avec index 
foreach($tab as $index =>$filiere)
{
    //echo "L'index: $index, correspond à la filiere: $filiere.";
}

//A trouver: comment afficher contenu de $tab2 ?








//déclarer un tableau dans une variable qui contient les éléments suivants: Janvier, Février, Mars, 2019, 2018, 2017, "fin", "stop", "recommencer"

$tab4=array("Janvier", "Février", "Mars", 2019, 2018, 2017, "fin", "stop", "recommencer");
var_dump($tab4);


//Afficher les éléments d'un tableau

$tabMois=["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
foreach($tabMois as $value)
{
    echo $value;
}


//choisir/paramettrer/personnaliser index de tableau

$tabVS = array("id-850" => "VERROUX", "id-851" => "RENAY", "id-852" => "VITULIN");
foreach($tabVS as $ID => $nomVS)
{
    echo "<pre>";
    echo "L'identifiant : $ID est attribué au VS $nomVS";
    echo "</pre>";
}



$a=100;
$a+=200;
echo $a;

$a-=50;
echo$a;


// une variable constante

// déclarer une variable constante 
define("JOURNEE", "24h");
echo JOURNEE; 

echo "A la fin de cette journée, nous aurons JOURNEE de plus ";
echo "A la fin de cette journée, nous aurons ".JOURNEE." de plus ";
echo 'A la fin de cette journée, nous aurons '.JOURNEE.' de plus ';

// Ne peut pas faire JOURNEE=24


define("NBR1", 50);
define("NBR2", 150);

$resultat = NBR1 + NBR2;
echo $resultat;

define ("INFO", NBR1);
echo INFO;


/*structures de controle
$a=10;
$b=15;
$c=0,50;
$e= $a + $c;

//if

if($a ==$e)
{
    //si c'est vrai, affiche une réponse
    echo "La réponse est vraie";

    // et mettre da'autres actions 
    $e= $a; 

    //si c'est faux, il ne se passe rien 
}

// else 

if ($a =$e)
{
    //si c'est vrai, affiche quelque chose 
}

else{
    //si c'est faux, affiche autre chose 
    echo "La réponse est fausse";

    //mettre des actions 
    $e= 0;

    //si c'est faux, il ne se passe rien





}

*/


// ELSE IF




if ($a > $b)
{
    // si c'est vrai
    echo "a est plus grand que b";
}

elseif( $a== $b)
{
    echo "a est égal à b";
}
else{
    echo "a est plus petit que b";
}




// syntaxe alternative














//Balise fermante ?>

<?php
 $a = 7;
 $b = 6;

 if ( $a == 5) : ?>
<p>A est égal 5</p>
<?php endif; ?>

<?php
if($a ==5):
echo "a égale 5";
echo "...";
elseif($a ==6):
echo "a égale 6";
echo"!!!";
else: 
    echo "a ne vaut ni 5 ni 6";
endif;


// opérateur ternaire= condition ternaire
// ?résultat ? si c'est vrai: si c'est faux 
echo $resultt ? $a == $b : "c'est faux";

//
if($a == $b)
{
    //affiche rien 
}
else 
{
    //affiche 
    echo $result = "c'est faux";
}




// exercie
/*
-Mettre en place un script pour autoriser les hommes d'un âge supérieur à 35 ans à écrire un livre.

-Mettre en place un script permettant de lister les personnes ayant réussies l'examen du code de la route. Voici les notes :
35, 37, 25, 4, 40, 36, 40, 12,34, 22, 20, 10, 10

-

*/

$a=40;
$b=35;






if ($a > $b)
{
    
    echo "L'homme peut écrire un livre";
}


else{
    echo "L'homme ne peut pas écrire un livre";
}



$codes= [35, 37, 25, 4, 40, 36, 40, 12,34, 22, 20, 10, 10];
foreach($codes as $value)
{
    if($value>34)
    {
        echo $value;
    }
}



// boucle while (affiche )


$i = 1;
while($i <= 10){
    echo $i;
    $i++;
}


// boucle do while (while + verification)

$i = 0;
do{
    echo $i;
}   while($i > 0);




// break (affiche pas les autres éléments si celui ci a ete trouve)

$tabPS = ["RENARD", "TERRINE", "NEY", "MARIE-LUCE" ,"THOME"];

$nbr = count ($tabPS);
foreach( $tabPS as $value)
{

    
        if ($value == "MARIE-LUCE")

        {
            break;
        }

        echo $value;



}



// switch (équivaut à Série d'instructions IF) 

$i= 25;


switch ($i)
{
    case 2 :
            echo $i;
            break;
    
    case 20;
            echo $i;
            break;  
            
    case 25;
            echo $i;
            break;     

}


// include 
include("head.php");





?>