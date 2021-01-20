<?php include("../../conf_html/p_high.php"); ?>


<?php 

    if(!isset($_POST["go"]))
    {
        $viewOn = "<div class='container d-flex vh-100'>
                    <div class='row mx-auto align-self-center'>
                        <div class='col-12'>
                            <form method='POST'>
                                <div class='form-group'>
                                    <select class='my-2 form-group' name='civility'>
                                        <option>Mr</option>
                                        <option>Mme</option>
                                    </select>
                                </div>
                                <div class='form-group'>
                                    <input class='my-2 form-control' type='text' name='firstname' placeholder='votre nom'>
                                </div>
                                <div class='form-group'>
                                    <input class='my-2 form-control' type='text' name='surname' placeholder='votre prenom'>
                                </div>
                                <div class='form-group'>
                                    <input class='my-2 form-control' type='file' name='file' value='Envoyez mon fichier'>
                                </div>
                                <div class='form-group'>
                                    <input class='my-2 form-control' type='submit' name='go' value='Validez'>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>";

        echo $viewOn;
    }


    if(isset($_POST["go"]))
    {
        $firstname = $_POST["firstname"];
        $surname = $_POST["surname"];
        $civility = $_POST["civility"];
        $file_name = $_POST['file'];
        $viewOn = "";

        echo "Votre nom : ".$firstname.
        "<br /> Votre prénom : ".$surname.
        "<br /> Votre civilité : ".$civility.
        "<br /> Nom du fichier : ".$file_name;
    }

?>


















<?php include("../../conf_html/p_low.php"); ?>