<?php


date_default_timezone_set('Europe/Paris');

?>


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Date</title>
</head>

<body class=" bg-light">
    <div class="container">
        <h1 class="display-3">Manipulation de la date et l'heure</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Date du jour</h2>

                <!-- 1. date du jour -->
                <p class="text-muted">Nous somme le <?php echo date('d-m-Y'); ?></p>

                <!-- 2. date du jour textuelle -->
                <p class="text-muted">Nous somme <?php echo date('jS F Y'); ?></p>

                <!-- 3. L'heure courante -->
                <!-- Utilisation de la balise time (datetime prend date ISO ) -->
                <p class="text-muted">Il est <time datetime="<?= date('H:i'); ?>"><?php echo date('H:i') ?></time></p>

                <!-- 4. date en français -->
                
                <!-- Définir la configuration locale par défaut au fr  -->
                <p class="text-muted">Nous somme <?php 
                    setlocale(LC_TIME, 'fr_FR');
                    echo utf8_encode(strftime("%A %e %B %Y"));
                ?>
                </p>
                <br>
                
                <!-- 5. Timestamp courant -->
                <h2>Timestamp courant</h2>
                <p class="text-muted">Timestamp courant <?php 
                    $date = date_create();
                    $show = date_timestamp_get($date);
                    echo $show;
                ?>
                </p>
               
                <!-- 6. Calcul de date -->
                <h2>Calcul de date</h2>
                <!-- Faites vos calculs ici -->
                <p class="text-muted">Nombre de jour dépuis le debut des cours <?php 
                    
                ?>
                </p>
               
                <!-- 7. J + 25 -->
               
               <!-- Faites vos calculs ici -->
                <p class="text-muted">La date J + 25 est : <?php echo date('jS F Y', strtotime('+25 days')); ?></p>
                
                <!-- 8. J - 15 -->
               <!-- Faites vos calculs ici -->
                <p class="text-muted">La date J - 15 est : <?php echo date('jS F Y', strtotime('-15 days')); ?></p>
                <br>
                
                <!-- 9. Nb de jour dans le mois -->
                <h2>Nombre de jour dans le mois</h2>
                <p class="text-muted">Nombre de jour : <?php 
                    $days = date("m");
                    $year = date('Y');
                    echo $number = cal_days_in_month(CAL_GREGORIAN, $days, $year);
                ?>
                </p>
                
                <!-- 10. Timestamp Epoch -->
                <h2>Timestamp du 01/01/1970 00:00</h2>
                <p class="text-muted">Nombre de jour : <?php 
                    $date2 = new DateTime("1970-01-01 00:00");
                    echo $date2->format("U");
                ?>
                </p>
                <hr>
               
                <!-- 11 date du timestamp -->
                <h2>Date du timestamp 1601532000</h2>
                <p class="text-muted">Date correspondante est : <?php
                    $date3 = date('d-m-Y H:i:s', 1601532000);
                    echo $date3;
                ?>
                </p>
                
                <!-- 12 calcul âge -->
                <h2>Calcul de l'âge </h2>
                 <!-- Faites vos calculs ici -->
                <p class="text-muted">L'âge de personne née 1 avril 1978 est : <?php
                    $birthdate = new DateTime("04-01-1978");
                    $currdate = new DateTime();
                    $age = $currdate->diff($birthdate);
                    echo $age->y;

                ?>
                 .</p>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>