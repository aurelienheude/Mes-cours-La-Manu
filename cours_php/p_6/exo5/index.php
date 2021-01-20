
<form method="POST" action="user.php">
    <select name="civility">
        <option>Mr</option>
        <option>Mme</option>
    </select>

    <input type="text" name="firstname" placeholder="votre nom">
    <input type="text" name="surname" placeholder="votre prenom">
    <input type="submit" name="go" value="Validez">
</form>

<?php 

if(isset($_GET["info_user"]))
{
    $info_user = $_GET["info_user"];
    echo $info_user;
}

?>