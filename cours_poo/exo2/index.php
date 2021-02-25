<?php 
    include "models/model.php";
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
    <div class="child_bank">
    <?php 
        $transaction_object = new AccountBank;
        $transaction_object->Credit(30);
    ?>
    </div>
</div>

</body>
</html>

