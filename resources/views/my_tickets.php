<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/style_tickets.css">
    <script src="<?= URL_DIR ?>public/js/sandbox.js"></script>
</head>
<body style="overflow-x: hidden">
 
 
<?php include "layouts/Header.php"; ?>
 

<main class="main-section">
    <section class="banner-image" style="background-image: url('<?= URL_DIR ?>public/svgs/afcon-tickets\ 1.svg');">
    </section>
    <section class="my-tickets">
        <h1 class="tickets-title">My E-Tickets</h1>
        <div class="my-tickets-container">
            <?php foreach($result as $reservation): ?>
            <div class="ticket-container">
                <div class="ticket-header">
                    <img src="<?= URL_DIR ?>/public/images/img_home/lib/lightbox/images/<?= $reservation->image_match  ?>" alt="match image" style="width: 401px;">
                    <a href="<?= URL_DIR ?>app/tickets/<?= $reservation->ticket ?>.png" class="ticket-download ticket-content--font ticket-content--bold " target="_blank" >Download your E-Ticket</a>
                </div>
                <div class="ticket-body">
                    <div class="ticket-date ticket-content--font ticket-content--bold">
                  <p>  <?php echo $reservation->price ?> $</p>
                    </div>
                    <div class="ticket-content">
                        <p class="ticket-content-title ticket-content--font ticket-content--bold"><?= $reservation->team2_name ?> vs <?= $reservation->team1_name ?></p>
                        <p class="ticket-content-price ticket-content--font">category :<?php echo $reservation->category?></p>
                    
                        <div class="ticket-location-container">
                            <img width="20" height="20" src="https://img.icons8.com/ios/20/marker--v1.png" alt="marker--v1"/>
                            <p class="ticket-content-location ticket-content--font ticket-content--bold"><?php echo $reservation->stade_name ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

          
           
        </div>
    </section>
</main>

<?php include "layouts/Footer.php" ?>


<script src="<?= URL_DIR ?>public/js/jquery-3.7.1.min.js"></script>
<script src="<?= URL_DIR ?>public/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
</body>
</html>