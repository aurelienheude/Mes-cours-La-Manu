function formFunction() {
    let pseudoForm = document.getElementById("pseudoForm").value;
    let mailForm = document.getElementById("mailForm").value;
    let passwordForm = document.getElementById("passwordForm").value;
    let repeatpasswordForm = document.getElementById("repeatpasswordForm").value;

    if (pseudoForm != "") {
        if (mailForm != "") {
            if (passwordForm != "") {
                if (repeatpasswordForm != "") {
                    if (passwordForm === repeatpasswordForm) {
                        document.getElementById("resultForm").innerText = ResultForm = "Valeur : " + pseudoForm + ", " + mailForm + ", " + passwordForm + ", " + repeatpasswordForm + " Bien envoyé !";

                    } else {
                        document.getElementById("passwordHelp").innerText = "bip bip boup bip mot de passe pas identique";
                    }
                } else {
                    document.getElementById("repeatpasswordHelp").innerText = "champ vide !";
                }
            } else {
                document.getElementById("passwordHelp").innerText = "champ vide !";
            }
        } else {
            document.getElementById("emailHelp").innerText = "champ vide !";
        }
    } else {
        document.getElementById("pseudoHelp").innerText = "champ vide !";
    }
}