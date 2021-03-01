<?php
require_once "controllers/ctrl_index.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Carte</th>
                <th>Numero de carte</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($clientsArray as $client)
            {
            ?>
                <tr>
                    <td><?= $client["lastName"] ?></td>
                    <td><?= $client["firstName"] ?></td>
                    <td><?= $client["newBirthDate"] ?></td>
                    <td><?= $client["card"] ?></td>
                    <td><?= $client["cardNumber"] ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
    </table>

</body>
</html>