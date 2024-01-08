<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/register.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/profil.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">

    <title><?= /** @var TYPE_NAME $title */
        $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>

<?php /** @var TYPE_NAME $result */

if($data!=null){ ?>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Auth</h2>
                <span class="close">&times;</span>

            </div>
            <div class="modal-body">

                <p><?= $data ?></p>
            </div>
        </div>
    </div>
<?php } ?>

<?php $user=$result; ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <div class="my-4">
                    <h2 class="h3 mb-6 page-title">User Profile</h2>
                    <hr class="my-1">
                    <div class="row mt-5 align-items-center">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-3"><?= $user->getFull_name() ?></h4>
                                    <p class="small mb-3"><span class="badge badge-dark"><?= $user->getCin() ?></span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <p class="small mb-0 text-muted"><?= $user->getEmail() ?></p>
                                    <p class="small mb-0 text-muted"><?= $user->getPhone() ?></p>
                                    <p class="small mb-0 text-muted">
                                        <?php if($user->isVerify()){ ?>
                                            <span style="color: green">Verify</span>
                                        <?php }else{ ?>
                                            <a href="/streamstadium/auth/verify/<?= $user->getEmail() ?>" style="color: red;font-weight: 600">Not Verify</a>
                                        <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr class="my-4">
                    <form action="/streamstadium/Auth/update/<?= $user->getId() ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" name="full_name" placeholder="name" value="<?= $user->getFull_name() ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="age">Age</label>
                                <input type="text" id="lastname" class="form-control" name="age" value="<?= $user->getAge() ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" value="<?= $user->getEmail() ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" name="phone" value="<?= $user->getPhone() ?>">
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary" style="background-color: #FE7405; color: #fff;">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "layouts/Footer.php" ?>


<script src="<?= URL_DIR ?>public/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL_DIR ?>public/js/jquery-3.3.1.min.js"></script>
<script src="<?= URL_DIR ?>public/js/popper.min.js"></script>
<script src="<?= URL_DIR ?>public/js/bootstrap.min.js"></script>
<script src="<?= URL_DIR ?>public/js/main.js"></script>
<script src="<?= URL_DIR ?>public/js/sandbox.js"></script>
<script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>