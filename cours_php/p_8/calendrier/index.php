<?php
                    
$mois = date('m');
$annee = date('Y');

var_dump($mois);

var_dump($annee);
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php include "functions.php"; ?>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="container-fluid m-0 p-0 vh-100">
    <section class="container-fluid p-0 m-0">
        <div class="row mx-auto">
            <div class="col-md-12 m-0 p-0">
                <nav class="navbar navbar-dark bg-primary">

                    <a class="ms-3 navbar-brand" href="#">Le Calendrier</a>

                    <form class="me-3" method="POST">
                        <select name="years" class="">
                            <option selected>Selectionnez l'Année</option>
                            <?php $obj = new calendar; $obj->years(); ?>
                        </select>
                        
                        <select name ="months" class="">
                            <option selected>Selectionnez le mois</option>
                        </select>
                        <input type="submit" class="btn Thead_style btn-block" value="c'est parti" />
                    </form>
                </nav>
            </div>
        </div>
    </section>

    <section class="container vh-100 d-flex">
        <div class="row mx-auto align-items-center">
            <div class="col-md-12">
            <?php $obj = new calendar; $obj->calendrier($mois, $annee); ?>
            </div>
        </div>
    </section>











































    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>