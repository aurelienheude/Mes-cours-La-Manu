function getValue() {
   // Sélectionner l'élément input et récupérer sa valeur
   var chiffre1 = document.getElementById("ch1").value;
   var chiffre2 = document.getElementById("ch2").value;
   // Afficher la valeur
   let resultat = chiffre1 + chiffre2;
   alert("Votre incroyable résultat est égal à : " + resultat);
}