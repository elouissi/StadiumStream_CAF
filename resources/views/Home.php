<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
         <link href="../public/js/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../public/css/bootstrap_home.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/styles_footer.css">
        <link rel="stylesheet" href="../public/css/styles_header.css">
        <!-- Template Stylesheet -->

        <link href="../public/css/style_home/home.css" rel="stylesheet">
        <title><?= $title ?></title>
</head>

<body>
    <!-- header -->
<?php include "layouts/Header.php"; ?>
<!-- end header -->
        <!-- hero section -->
        <section class="hero-section d-flex flex-column align-items-center  " id="hero-section" >
            <img class="w-100" src="../public/images/img_home/lib/lightbox/images/3hero.png" alt="backgraound-hero" >
            
            <div class="input-group" id="hero-field" >
                <input type="text"id="hero_field" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                <button class="btn btn-warning bg-warning"  id="btn-search" type="button"><i class="bi bi-search"></i></button>
                <button class="btn btn-success bg-success " id="btn-search" type="button"><i class="bi bi-calendar3"></i></button> 
              </div> 
        </section>
        <!-- hero section -->
        <!-- section slider  -->
         <section class="frist-slider">
            <div class="d-flex justify-content-between mx-4" >
            <h2>Upcoming Matchs</h2>
            <a href="/StreamStadium/match/Match" >View All</a>
            </div> 
        <!-- match Shop Start tickets-->
            <div class="container-fluid vesitable py-5">
                <div class="container py-5" style="margin-top: -80px;">
               
                    <div class="owl-carousel vegetable-carousel justify-content-center">
                        <?php foreach($result as $match){ ?>
                            <div class="border border-primary rounded position-relative vesitable-item" id="serach_matchs" style=" height: 382px;"  style=" whidth: 300px; height: 200px;" >
                                <div class="vesitable-img">
                                    <img src="../public/images/img_home/lib/lightbox/images/<?= $match->image  ?>" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;"><?= $match->date_hour  ?></div>
                                <div class="p-4 rounded-bottom">
                                    <h4><?= $match->team2_name ?> vs <?= $match->team1_name ?></h4>
                                    <p><i class="fa-solid fa-location-dot">--</i><?= $match->stade_name ?></p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                         <a href="/StreamStadium/match/details_match/<?= $id = $match->id ?>  " class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add tickets</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        <!-- match Shop End -->
         </section>
         <!-- section slider end -->
            <main>
                    <!-- title group -->
                    <div id="title-group" style="text-align: center; margin-bottom: 30px;" >
                        <h1 style="margin-top: -7pc;" >CAN 2024</h1>
                    </div>
                    <!-- title group --> 
                    <!-- group Section Start-->
                    <div class="container-fluid banner bg-secondary w-75  rounded-3    " id="back_orange">
                        <div id="title-group-group" style="text-align: center;" >
                            <h2>--------------------Groups--------------------</h2>
                        </div>
                
                        <div class="container py-4"  >
                            <div class="" style="display: flex;flex-wrap: wrap;gap: 50px;margin-top: 40px;justify-content: center;">
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group A.svg" alt="Group A">
                                </div>
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group B.svg" alt="Group B">
                                </div>
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group C.svg" alt="Group C">
                                </div>
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group D.svg" alt="Group D">
                                </div>
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group E.svg" alt="Group E">
                                </div>
                                <div>
                                    <img src="../public/images/img_home/lib/lightbox/images/Group F.svg" alt="Group F">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- group Section End -->
                    <div id="left-title-stadium" class="d-flex justify-content-between mt-4 px-4" >
                        <h2>Browse Available Stadiums</h2>
                        <p>View All</p>
                    </div> 
                    <!-- stadiums Shop Start tickets-->
                    <div class="container-fluid vesitable py-5">
                        <div class="container py-5" style="margin-top: -80px;">
                    
                            <div class="owl-carousel vegetable-carousel justify-content-center">
                            <?php foreach($data as $stade){ ?>
                                <a href="/StreamStadium/stadium/details_stad/<?php echo $id = $stade->id ?>  " >
                                <div class="border border-primary rounded position-relative vesitable-item"  style=" height: 412px;">
                                    <div class="vesitable-img">
                                        <img src="../public/images/img_home/lib/lightbox/images/<?= $stade->image ?>" class="img-fluid w-100 rounded-top" alt="" style=" whidth: 300px; height: 200px;">
                                    </div>
                                    <div class="p-4 rounded-bottom">
                                        <h4><?= $stade->name ?></h4>
                                        <p><i class="fa-solid fa-location-dot"></i>Capacity: <?= $stade->capacity ?></p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"> <strong>city: </strong> <?= $stade->city ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php }?>
                        
                            
                            </div>
                        </div>
                    </div>
                    <!-- stadiums Shop End -->
                
                    <!-- start title teams -->
                    <div  style="text-align: center; margin-bottom: 30px;" >
                        <h1 style="margin-top: -7pc;" >Teams</h1>
                    </div>
                    <!--  title teams --> 
                    <!-- start teams -->
                    <div class="container-fluid banner bg-secondary w-100  rounded-3    " style="height: 500px; margin-bottom: 150px;" id="back_orange">
                        <div class="container-fluid vesitable py-5">
                            <div class="container py-5" style="margin-top: -80px;">
                        
                                <div class="owl-carousel vegetable-carousel justify-content-center">
                                <?php foreach($teams as $team){ ?>
                                    <div class="border border-primary rounded position-relative vesitable-item bg-white" style=" height: 412px;">
                                        <div class="vesitable-img">
                                            <img src="../public/images/img_home/lib/lightbox/images/<?= $team->image ?>" class="img-fluid w-100 rounded-top" alt=""  style=" whidth: 300px; height: 200px;">
                                        </div>
                                        <div class="p-4 rounded-bottom">
                                            <h4><?= $team->name ?></h4>
                                            <p><i class="fas fa-user-circle">-</i><?= $team->coach ?></p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0"></i><?= $team->federation ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                     
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end teams -->
                    <!-- collaborators Start -->
                    
                    <div class="container-fluid  px-5">
                        <div  style="text-align: center; margin-bottom: 30px;" >
                            <h1 style="margin-top: -7pc;" >Our collaborators</h1>
                        </div>
                            
                        <div class="bg-light p-5 rounded">
                            <div id=""class="" style="display:flex ;flex-wrap: wrap; gap: 20px; justify-content: center;     margin-left: -44px;" >
                                <div style="width: 14rem;display: flex; justify-content: center;     " >
                                    <hr>
                                <div class="  bg-white rounded p-5   ">
                                        
                                        <img src="../public/images/img_home/lib/lightbox/images/fifa.svg" alt="" style="margin: auto;" >
                                    </div>
                                </div>
                                <hr>
                                <div style="width: 14rem;display: flex; justify-content: center; ">
                                    <div class="  bg-white rounded p-5">
                                        <img src="../public/images/img_home/lib/lightbox/images/cote.svg" alt="">
                                        
                                                                </div>
                                </div>
                                <hr>
                                <div style="width: 14rem;display: flex; justify-content: center; ">
                                    <div class="  bg-white rounded p-5">
                                        <img src="../public/images/img_home/lib/lightbox/images/adidas.svg" alt="">
                                                                    </div>
                                </div>
                                <hr>
                                <div style="width: 14rem;display: flex; justify-content: center; ">
                                    <div class="  bg-white rounded p-5">
                                        <img src="../public/images/img_home/lib/lightbox/images/1xbet.svg" alt="">
                                    </div>
                                    <hr>
                                </div>
                                <hr>
                                <div style="width: 14rem;display: flex; justify-content: center; ">
                                    <div class="  bg-white rounded p-5" style=" width: 132%;
                                    margin-left: 3pc;">
                                        <img src="../public/images/img_home/lib/lightbox/images/afriquia.svg" alt="">
                                    
                                        
                                </div>
                                <hr>
                            
                            
                            </div>
                            
                        </div>
                        
                    </div>

                    </div>
                    <!-- collaborators Start -->
            </main>

            <?php include "layouts/Footer.php"; ?>
 
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
    <script src="../public/js/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../public/js/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../public/js/sandbox.js"></script>

    <!-- Template Javascript -->
    <script src="../public/js/home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" >
        //garantie que le code jquery a l'interieur de la fonction ne exute entant que le DOM ne charger
        $(document).ready(function(){
            $("#hero_field").keyup(function(){
                var input = $(this).val();
      
                if(input != ""){
                    $.ajax({
                        url:"/StreamStadium/match/search_match/",
                        method:"POST",
                        data:{input:input},
                        success:function(data){
                        $("#serach_matchs").html(data);
                        }
                    })
                }
            })
        })
    
                // alert(input);

                //permission de communicer de maniere asynchrone
                       
                        //exucuton si la requete ajax a reussi
       
        
    </script>
    </body>







</html>