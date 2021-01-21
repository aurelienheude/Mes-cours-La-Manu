<?php include("../../conf_html/p_high.php");
session_start();

if(isset($_POST["go"]))
{
    setcookie('pseudo_member', $_POST["pseudo_member"], time() + 365*24*3600, null, null, false, true);
    setcookie('password_member', $_POST["password_member"], time() + 365*24*3600, null, null, false, true);
}
?>



<div class='container d-flex vh-100'>
    <div class='row mx-auto align-self-center'>
        <div class='col-12'>
            <form method='POST' action="">
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
</div>
<?php include("../../conf_html/p_low.php");?>