<?php include("../../conf_html/p_high.php"); ?>

<?php

if (!empty($_POST["go"])) 
{

    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $civility = $_POST["civility"];

    if (!empty($firstname)) 
    {
        if (!empty($surname)) 
        {
            if (!empty($civility)) 
            {
                if (isset($_FILES['file']) and $_FILES['file']['error'] == 0) 
                {
                            
                    $infosfichier = pathinfo($_FILES['file']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('jpg', 'jpeg', 'png');
                    
                    if (in_array($extension_upload, $extensions_autorisees)) 
                    {
                                
                        move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . basename($_FILES['file']['name']));

                        $tab_profil_info = ["firstname" => $firstname, 
                                            "surname" => $surname, 
                                            "civility" => $civility, 
                                            "file_name" => $_FILES["file"]["tmp_name"]];

                        $profil_info_str = http_build_query($tab_profil_info);

                        header("Location:profile.php?firstname=".$firstname."&surname=".$surname."&civility=".$civility."&filename=".$_FILES['file']['name']);
                    }else{
                        echo "image de profil non valide";
                    }
                }else{
                    echo "Veuillez envoyer une image svp !";
                }
            } else {
                echo " Veuillez rentrer une civilité.";
            }
        } else {
            echo "un ou plusieurs champs vide !";
        }
    } else {
        echo "un ou plusieurs champs vide !";
    }
}
?>

<div class='container d-flex vh-100'>
    <div class='row mx-auto align-self-center'>
        <div class='col-12'>
            <form method='POST' enctype="multipart/form-data" action="">
                <div class='form-group'>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civility" value="Mr" />
                        <label class="form-check-label" for="exampleRadios1">
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