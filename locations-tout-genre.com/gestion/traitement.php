<?php

//Traitement du formulaire register 

//print_r($_POST);

//var_dump($_POST["frmNom"]);
/*
foreach($_POST as $key => $value)

    echo $key . "valeur" . strlen(htmlentities(strip_tags($value))) . "<br />";
   

if(strlen(htmlentities(strip_tags($value))) > 50)
{
    echo "La chaine correspondant à $key, n'est pas valide <br />";

} else
{
    echo "$kay valeur" .htmlentities(strip_tags($value)). "<br />";
}
*/

print_r(password_hash($_POST["frmPass"], PASSWORD_DEFAULT));

echo md5($_POST["frmPass"]);
$salt ="marsouins";
$salt = md5($salt);

// htmlentities convertit tous les caractères éligibles en caractères html