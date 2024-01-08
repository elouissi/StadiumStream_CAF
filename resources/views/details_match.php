<?php /** @var TYPE_NAME $title */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/register.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/details_match.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">
    
</head>
<body>

<?php include "layouts/Header.php"; ?>
 


<section class="container-fluid">
    <div class="row">
  
 
    <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?php  echo  $result->image  ?>" class="img_match" alt="image_match" style="width:850px; height:400px; margin:auto;"  >
 
   
    
    </div> 
    <div class="row mt-3">
        <div class="col-md-6 ps-5">
            <div class="ms-5">
                
                <h1><?php  echo $result->team2_name . "  vs  " . $result->team1_name ?>  </h1>
                    <p class="match_stad_date">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <?= $result->stade_name ?>
                </p>
                <p class="match_stad_date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <?= $result->date_hour  ?>
                </p>
            
            </div>

        </div>
        <div class="col-md-6">
            <div class="mx-auto box_reserver">
                <div class="p-3">
                    <span>Tickets reserved</span> <br>
                    <strong> <?= $result->stade_capacity ?>  </strong><br> <br>
                    <a href="/StreamStadium/match/reservation/<?= $id = $result->id ?>" class="btn btn-success">Reserve your E-tickets</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <h2 class="mb-5 text-center">Match informations</h2>
            <div class="col-md-6 ps-5 mb-5">
                <h3><?= $result->team2_name ?></h3>
                <p><?= $result->team2_description  ?></p>
                <div class="ps-4">
                    <p><strong>Coach : </strong><span><?= $result->team2_coach  ?></span></p>
                    <p><strong>Federation : </strong><span><?= $result->team2_federation  ?></span></p>
                    <p>
                        <strong>Cups : </strong>
                        <?php
                        $i = 1;
                        $n_cups =  $result->team2_cups;
                        if(  $n_cups == 0 ){
                            echo 0;
                           }
                         while($i <= $n_cups ):?>

                        <img class="img_cups" src="<?= URL_DIR ?>public/images/cup.png" alt="Cups">
                        
                        <?php 
                        $i ++;
                     endwhile; ?> 
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?= $result->team2_image  ?>">
            </div>
            <div class="col-md-6 ps-5">
                <h3><?= $result->team1_name ?></h3>
                <p><?= $result->team1_description  ?></p>
                <div class="ps-4">
                    <p><strong>Coach : </strong><span><?= $result->team1_coach  ?></span></p>
                    <p><strong>Federation : </strong><span><?= $result->team1_federation  ?></span></p>
                    <p>
                        <strong>Cups : </strong>
                        <?php
                        
                        $i = 1;
                        $n_cups =  $result->team1_cups;
                        if(  $n_cups == 0 ){
                         echo 0;
                        }
                         while($i <= $n_cups ):?>

                        <img class="img_cups" src="<?= URL_DIR ?>public/images/cup.png" alt="Cups">
                        
                        <?php 
                        $i ++;
                     endwhile;
                      ?> 
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?= $result->team1_image  ?>">
            </div>
        </div>
    </div>
</section>

<div class="container mt-3">
    <div class="row">
        <h2 class="mb-5 text-center">The matchs of teams</h2>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="<?= URL_DIR ?>public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                       <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="<?= URL_DIR ?>public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="<?= URL_DIR ?>public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="<?= URL_DIR ?>public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="<?= URL_DIR ?>public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/Footer.php" ?>

<script src="<?= URL_DIR ?>public/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
</body>
</html>