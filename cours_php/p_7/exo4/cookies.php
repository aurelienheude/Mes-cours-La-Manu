<?php include("../../conf_html/p_high.php");
session_start();

?>



<div class='container d-flex vh-100'>
    <div class='row mx-auto align-self-center'>
        <div class='col-12'>
            <?php 
                if(isset($_COOKIE["pseudo_member"]) && isset($_COOKIE["password_member"]))
                {
                    echo "<img src='https://media4.giphy.com/media/1eEAo5f1NXDtxHLgLM/source.gif' /><br />".$_COOKIE["pseudo_member"]."<br />";
                    echo $_COOKIE["password_member"];
                }else{
                    echo "<img src='https://media.giphy.com/media/SKwcn2Sh30bEXT4Qut/giphy.gif' /><br />pas de cookies pour garry";
                }
            ?>
        </div>
    </div>
</div>
<?php include("../../conf_html/p_low.php");?>