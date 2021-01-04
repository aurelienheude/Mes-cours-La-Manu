/**
Multiplier la pointure par 2
Ajouter 5 au résultat
Multiplier le tout par 50
Soustraire l’année de naissance
Ajouter au tout 1766
La fonction doit retourner le résultat. Tester avec votre date de naissance et votre pointure. Attention : n'utiliser qu'une seule variable de résultat.
**/

function showResult()
{
     // Sélectionner l'élément input et récupérer les valeurs 
     let shoeSize = document.getElementById("shoeSize").value;
     let yearOfBirth = document.getElementById("yearOfBirth").value;
     // Afficher la valeur
     
     let resultat = ((((shoeSize*2) + 5) *50) - yearOfBirth) + 1771;
 
     document.getElementById("result").innerText = resultat; // affichage du résultat dans une balise
}