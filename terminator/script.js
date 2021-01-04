function formFunction() {
    let pseudoForm = document.getElementById("pseudoForm").value;
    let mailForm = document.getElementById("mailForm").value;
    let passwordForm = document.getElementById("passwordForm").value;
    let repeatpasswordForm = document.getElementById("repeatpasswordForm").value;

    if (pseudoForm != "") 
    {
        if (mailForm != "") 
        {
            if (passwordForm != "") 
            {

                let lghpasswordForm = passwordForm.length;

                if (lghpasswordForm <= 30) 
                {
                    if (lghpasswordForm >= 8) 
                    {
                        if (repeatpasswordForm != "") 
                        {

                            if (passwordForm === repeatpasswordForm) 
                            {
                                let lghMailForm = mailForm.length;

                                if (lghMailForm > 4) 
                                {

                                    document.getElementById("resultForm").innerText = ResultForm = "Valeur : " + pseudoForm + ", " + mailForm + ", " + passwordForm + ", " + repeatpasswordForm + " Bien envoyé !";

                                } else if (lghMailForm < 4)
                                {
                                    document.getElementById("emailHelp").innerText = "ton email est trop court !";
                                }

                            }else {
                                document.getElementById("repeatpasswordHelp").innerText = "bip bip boup bip mot de passe pas identique";
                            }

                        }else {
                            document.getElementById("passwordHelp").innerText = "champ vide !";
                        }

                    }else{
                        document.getElementById("passwordHelp").innerText = " ton password est trop court mdr";
                    }

                }else{
                    document.getElementById("passwordHelp").innerText = "Ton password est trop long. ";
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