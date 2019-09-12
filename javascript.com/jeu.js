//déclaration tableau et initialisation à vide
var joueur=[];

//déclaration de ma fonction add joueur 
function add_joueur(){
    //afficher et stocker les joueurs
    joueur.push (prompt("écrire un nom de joueur en majuscule"))
    //tester variable joueur
    

    if (joueur !=null){
    
    //mettre en majuscule
    document.getElementById("affiche_joueur").innerHTML= joueur;
    }
    else{
        alert("vous n'avez pas indiqué de nom de joueur")
    }
}

//déclaration de ma fonction tirage au sort
function tirage_au_sort(){
    //tester la longueur de la chaine 
        if (joueur.length > 0){
            alert(joueur.length);

    //méthode mathématique pour mélanger les données
            //tirage au sort d'une donnée
            //indication de la longueur de mon tableau joueur
            var rand = Math.floor(Math.random()*joueur.length);
            //afficher le nom du gagnant 
            document.getElementById("affiche_gagnant").innerHTML= "le gagnant est : <strong>" + joueur[rand] + "</strong>"
        }
        else {

        alert("il n'y a pas de gagnant");
    }
}