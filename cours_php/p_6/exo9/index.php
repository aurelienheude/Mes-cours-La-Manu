<?php include("../../conf_html/p_high.php"); ?>

<?php

if (!empty($_POST["go"])) 
{

    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $file = $_POST["file"];
    $civility = $_POST['civility'];

    if(!empty($firstname))
    {
        if(!empty($surname))
        {
            if(!empty($civility))
            {
                if(!empty($file))
                {

                    $file = pathinfo($file);
                    

                    if ($file["extension"] == "png" OR "jpg" OR "jpeg") 
                    {

                        header("Location:profile.php?profile_info=".$firstname, $surname);

                    }else{

                        echo $file['filename']." n'est pas une image valide.";

                    }
                }else{

                    echo "Veuillez insérer une photo de profil.";

                }
            }else{
                echo " Veuillez rentrer une civilité.";
            }
        }else{
            echo "un ou plusieurs champs vide !";
        }
    }else{
        echo "un ou plusieurs champs vide !";
    }
}
?>

<div class='container d-flex vh-100'>
    <div class='row mx-auto align-self-center'>
        <div class='col-12'>
            <form method='POST'>
                <div class='form-group'>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civility" value="Mr" />
                        <label class="form-check-label" for="exampleRadios1" >
                            Mr
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civility" value="Mme" />
                        <label class="form-check-label" for="exampleRadios2">
                            Mme
                        </label>
                    </div>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='text' name='firstname' placeholder='votre nom'>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='text' name='surname' placeholder='votre prenom'>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='file' name='file'>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='submit' name='go' value='Validez'>
                </div>
            </form>
        </div>
    </div>
</div>

























































<?php include("../../conf_html/p_low.php"); ?>