<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/match.css">
     <link href="../public/css/bootstrap_home.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="../public/js/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>






    <title><?= $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>

<section>
<!-- recherche -->
        <div class="container">
            <div class="row d-flex justify-content-left align-items-center m-3">
    
                <div class="col-md-2">
                    <select id="filterCategory" class="form-select btn btn-danger dropdown-toggle dropdown-toggle-split" style="background-color: #FE7405;">
                        <option value="team">Team</option>    
                        <option value="all">All</option>
                        <option value="stadium">kxfkfkbgkf</option>
                        <option value="stadium">kxfkfkbgkf</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select id="filterCategory" class="form-select btn btn-danger dropdown-toggle dropdown-toggle-split" style="background-color: #FE7405;">
                        <option value="stadium">Stadium</option>
                        <option value="all">All</option>   
                        <option value="stadium">kxfkfkbgkf</option>
                        <option value="stadium">kxfkfkbgkf</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="match?">
                        <button class="btn btn-success">Search</button>
                    </div>
                </div>
            </div>
        </div>
<!-- carts -->
<div class="p-5 mb-3 m-5 text-black rounded" style="background-color: #FE7405;">
 
    <div class=" row   row-cols-md-3 g-5 m-2">
           
            <?php foreach($result as $match){ ?>
      <div class="border border-primary rounded   bg-white mx-4" style=" height: 412px; whidth: 300px;" id="block" >
    <div class="col" style="back-" >
    <div class="vesitable-img">
      <img src="../public/images/img_home/lib/lightbox/images/<?= $match->image  ?>" class="img-fluid w-100 rounded-top" alt=""   >
     </div>
      <div class="p-4 rounded-bottom">
     <h4><?= $match->team2_name ?> vs <?= $match->team1_name ?></h4>
    <p><i class="fa-solid fa-location-dot">--</i><?= $match->stade_name ?></p>
    <p>date : <?= $match->date_hour  ?></p>
     <div class="d-flex justify-content-between flex-lg-wrap">
       <a href="/StreamStadium/match/details_match/<?= $id = $match->id ?>  " class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add tickets</a>
     </div>
     </div>
    </div>
    </div>
    <?php } ?>
    </div>

</div>

<!-- end carts -->

</section>

<?php include "layouts/Footer.php" ?>

</body>
</html>