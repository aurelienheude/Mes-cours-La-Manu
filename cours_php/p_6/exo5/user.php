<?php 

if(isset($_POST['go']))
{
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $civility = $_POST['civility'];
    $info_user = "nom : ".$firstname.", <br />prénom : ".$surname.", <br />Civilité : ".$civility;

    header("Location:index.php?info_user=".$info_user);
}

?>
