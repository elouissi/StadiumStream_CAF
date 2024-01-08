<?php /** @var TYPE_NAME $title */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/reservation.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">

</head>
<body>

<?php include "layouts/Header.php"; ?>
 

<div class="container-fluid">
     <div class="row">
   
        <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?php  echo  $result->image  ?>" class="img_match" alt="image_match">
    </div>
    <div class="row pt-5">

        <form action="/streamstadium/Reservation/book/<?= $result->id; ?>" class="row" method="POST">
            <div class="col-md-6 text-center">
                <img src="<?= URL_DIR ?>public/images/stade_ticket.png" class="img_stade_ticket">

            </div>
            <div class="col-md-6 ps-5">

                    <div>
                        <h1><?php  echo $result->team2_name . "  vs  " . $result->team1_name ?>  </h1>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <?= $result->stade_name ?>
                        </p>
                        <p class="match_stad_date">
                            <i class="fa fa-calendar" aria-hidden="true"></i><?= $result->date_hour  ?>
                        </p>
                    </div>
                    <div>
                        <div class="d-flex">
                            <div class="color_category" style="background-color: rgb(133, 156, 219);"></div>
                            <div> Category 3
                                <span class="price_ticket">30$</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="color_category" style="background-color: rgb(114, 21, 197);"></div>
                            <div> Category 2
                                <span class="price_ticket">40$</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="color_category" style="background-color: rgb(210, 66, 13);"></div>
                            <div> Category 1
                                <span class="price_ticket">50$</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mt-3" style="gap: 55px">

                        <div class="text-center">
                            <strong>Category 3</strong>
                            <span class="input-wrapper tickets_qte mt-2">
                              <button type="button" class="decrement" id="decrement">-</button>
                              <input type="number" class="quantity" value="0" name="qte_ticket_catg3" id="quantity qte_ticket_catg3" />
                              <button type="button"  class="increment" id="increment">+</button>
                            </span>
                        </div>
                        <div class="text-center">
                            <strong>Category 2</strong>
                            <span class="input-wrapper tickets_qte mt-2">
                              <button type="button" class="decrement" id="decrement">-</button>
                              <input type="number" class="quantity" value="0" name="qte_ticket_catg2" id="quantity qte_ticket_catg2" />
                              <button type="button" class="increment" id="increment">+</button>
                            </span>
                        </div>
                        <div class="text-center">
                            <strong>Category 1</strong>
                            <span class="input-wrapper tickets_qte mt-2">
                              <button type="button" class="decrement" id="decrement">-</button>
                              <input type="number" class="quantity" value="0" name="qte_ticket_catg1" id="quantity qte_ticket_catg1" />
                              <button type="button" class="increment" id="increment">+</button>
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4>Total Price : <span id="price_total">0$</span></h4>
                    </div>
                </div>
            <div class="text-center mt-4">
            <?php  if (strtotime($data) < strtotime($result->date_hour)){ ?>
                <button class="btn btn-success" type="submit" style="width: 200px">Reserver</button>
                <?php  } else{
                    echo "you have depassed date";
                }  ;

               
                

                ?>
            </div>
    </div>
    <div class="container mt-5">
        <h3 class="text-center">Match information</h3>
        <div class="row mt-5">

            <div class="col-md-4">
                <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?= $result->team2_image  ?>" class="">
                <h3 class="text-center mt-3"><?= $result->team2_name ?></h3>
            </div>
            <div class="col-md-4 text-center my-auto">
                <div>
                    <p class="match_stad_date">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><?= $result->stade_name ?>
                    </p>
                    <h1>VS</h1>
                    <p class="match_stad_date">
                        <i class="fa fa-calendar" aria-hidden="true"></i><?= $result->date_hour  ?>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            <img src="http://localhost/streamstadium/public/images/img_home/lib/lightbox/images/<?= $result->team1_image  ?>" class="" style="
    margin-left: 23px;
">                <h3 class="text-center mt-3"><?= $result->team1_name ?></h3>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/Footer.php" ?>

<script src="<?= URL_DIR ?>public/js/jquery-3.7.1.min.js"></script>
<script src="<?= URL_DIR ?>public/js/reservation.js"></script>
<script src="<?= URL_DIR ?>public/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
</body>
</html>