<!--Si des données sont passées en POST ou en GET, affichez-les à la place du formulaire. Sinon affichez le formulaire.

Utiliser qu'une seule page.-->

<?php 

    if(!isset($_POST['go']))
    {
        $viewOn = "<form method='POST'>
                <select name='civility'>
                    <option>Mr</option>
                    <option>Mme</option>
                </select>

                <input type='text' name='firstname' placeholder='votre nom'>
                <input type='text' name='surname' placeholder='votre prenom'>
                <input type='submit' name='go' value='Validez'>
                </form>";

        echo $viewOn;
    }
    

    if(isset($_POST['go']))
    {
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $civility = $_POST['civility'];

        $viewOn = "";

        echo "Votre nom : ".$firstname."<br /> Votre prénom : ".$surname."<br /> Votre civilité : ".$civility;
    }

?>

