/*var marsouins=["VERROUX","RENAY","VITULIN","TERRINE","ROBINEL","MAXIMIN","MARIE-LUCE","RENARD-VATON","NEY","THOME"];
var copie=[];


console.log(marsouins);
console.log(marsouins[4]);
console.log(marsouins.length);
var nbr=marsouins.length;
for(var i=0;i<nbr;i++ )
copie.push(marsouins[i]);
console.log(copie)

var last=marsouins[marsouins.length -1];
document.write(last);
marsouins.forEach(function(item,index,array){
document.write(item,index);
});
var marsouins =marsouins.push("POPOTTE");
document.write(marsouins);
//var deletelastmarsouins=marsouins.pop();
document.write(marsouins);
var deletefirstmarsouins=marsouins.shift();
document.write(marsouins);*/
var question=prompt("est ce que monsieur RENARD-VATON a compris le cours ?");
if (question != null){
    document.getElementById("reponse"). innerHTML = question;
}

var rmsa=prompt("quelle heure est il ?");
if (rsma != null){
    document.getElementById("reponse"). innerHTML= question;
}



var genre = prompt ("Êtes-vous un homme ou une femme"); 
if ( genre  != null){     
    document.getElementById("reponse").innerHTML = genre; }