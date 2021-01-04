//Demander à l’utilisateur de saisir son âge. S’il a plus de 18 ans, afficher " Vous êtes majeur ". Sinon afficher " Vous êtes mineur ".

function showAge() {
    let age = document.getElementById("age").value;

    if (age >= 18) {

        document.getElementById("result").innerText = "vous êtes majeur"; // affichage du résultat dans une balise
    } else if (age < 18) {


        document.getElementById("result").innerText = "vous êtes mineur"; // affichage du résultat dans une balise
    }
}
