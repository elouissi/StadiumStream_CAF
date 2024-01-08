<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/stadium.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/header_footer.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">
</head>
<body>

<?php include "layouts/Header.php"; ?>

<div class="container-fluid">
    
    <div class="row">
        <img src="<?= URL_DIR ?>public/images/img_home/lib/lightbox/images/<?php  echo  $result[0]->image  ?>" class="img_match" alt="image_match">
    </div>
    <div class="row">
        <div class="col-12 ps-5 mt-4">
            <div class="ps-3">
                <h1><?= $result[0]->name ?></h1>
                
                <p class="match_stad_date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> Capacity : <?= $result[0]->capacity ?>
                </p>
                <p class="match_stad_date mb-5">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> <?= $result[0]->city ?>
                </p>
                <h3>Description</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.</p>
            </div>
        </div>
    </div>
</div>

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