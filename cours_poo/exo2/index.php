<?php 
    include "models/model.php";

    $accounts = new AccountBank("Heude Aurélien", 2165, 50, "€");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque centrale</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="cards_bank">
        <div class="info">
            <ul>
                <li><strong>CCHQ</strong></li>
                <li><strong>Monsieur <?php $accounts->get_holder(); ?></strong></li>
                <li>n°61495862152</li>
            </ul>
        </div>

        <div class="wallet">
            <div class="balance">
                Mon Porte monnaie : <strong><?php $accounts->get_balance(); $accounts->get_currency();?></strong>
            </div>
        </div>
    <?php 
        
    ?>
    </div>
</div>

</body>
</html>

