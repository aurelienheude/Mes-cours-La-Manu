
document.getElementById("go").addEventListener("click", resultat(e)); 

function divisionNumber(e) 
{
    e.preventDefault();

    // Sélectionner l'élément input et récupérer les valeurs 
    let firstNumber = document.getElementById("firstNumber").value;
    let secondNumber = document.getElementById("secondNumber").value;
    // Afficher la valeur
    let resultat = firstNumber / secondNumber;

    document.getElementById("result").innerHTML = resultat;
 }