(function test() {
  var updateButton = document.getElementById('updateDetails');
  var favDialog = document.getElementById('favDialog');
  var outputBox = document.getElementsByTagName('output')[0];
  var selectEl = document.getElementsByTagName('select')[0];
  var confirmBtn = document.getElementById('confirmBtn');

  // Le bouton "mettre à jour les détails" ouvre la boîte de dialogue
  updateButton.addEventListener('click', function onOpen() {
    if (typeof favDialog.showModal === "function") {
      favDialog.showModal();
    } else {
      console.error("L'API dialog n'est pas prise en charge par votre navigateur");
    }
  });
  // Le champ "animal préféré" définit la valeur pour le bouton submit
  selectEl.addEventListener('change', function onSelect(e) {
    confirmBtn.value = selectEl.value;
  });
  // Le bouton "Confirmer" déclenche l'évènement "close" sur le dialog avec [method="dialog"]
  favDialog.addEventListener('close', function onClose() {
    outputBox.value = "Vous avez cliqué sur le bouton " + favDialog.returnValue + " !";
  });
};

test();