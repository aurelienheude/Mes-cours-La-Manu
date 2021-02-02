<?php include("../../conf_html/p_high.php");
?>
<div class="container d-flex vh-100">
    <div class="row mx-auto align-self-center">
        <div class="col-12">
                <?php 
                    if(isset($_COOKIE["pseudo_member"]) && isset($_COOKIE["password_member"]))
                    {
                        echo "Les cookies sont modifié ! <br /><img src='https://media.giphy.com/media/hTgCF43YwCprNzYKjN/giphy.gif' /><br />".$_COOKIE["pseudo_member"]."<br />";
                        echo $_COOKIE["password_member"]."<br />";
                    }else{
                        echo "<img src='https://media.giphy.com/media/SKwcn2Sh30bEXT4Qut/giphy.gif' /><br />pas de cookies pour garry<br />";
                    }
                ?>
            <a class="link" href="index.php"><- Revenir sur la page de modification des cookies</a>
        </div>
    </div>
</div>


<?php include("../../conf_html/p_low.php");?>