<?php include("../../conf_html/p_high.php");

if(isset($_POST["go"]))
{
    setcookie("pseudo_member", $_POST["pseudo_member"]);
    setcookie("password_member", $_POST["password_member"]);

    header("Location: cookie.php");
}else{
    $content = "<div class='container d-flex vh-100'>
    <div class='row mx-auto align-self-center'>
        <div class='col-12'>
            <form method='POST' action=''>
                <div class='form-group'>
                    <input class='my-2 form-control' type='text' name='pseudo_member' placeholder='votre pseudo'>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='password' name='password_member' placeholder='●●●●●●●●●'>
                </div>
                <div class='form-group'>
                    <input class='my-2 form-control' type='submit' name='go' value='Validez'>
                </div>
            </form>
        </div>
    </div>
</div>";
    echo $content;
}
?>

<?php include("../../conf_html/p_low.php");?>