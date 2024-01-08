<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_footer.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_header.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/css/styles_contact.css">
    <script src="<?= URL_DIR ?>public/js/sandbox.js"></script>
    <title>Sign in</title>
</head>

<body>

<?php include_once "layouts/Header.php"; ?>

<main>
        <section class="contact">
            <div class="contact__container">
                <div class="content">
                    <h1 class="contact__title">Get in touch</h1>
                    <p class="contact__description">We are here for you! How can we help?</p>
                </div>
                <form action="" class="form">
                    <div class="form__group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form__group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="form__group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div>
            <img class="contact__image" src="<?= URL_DIR ?>public/svgs/—Pngtree—contact us flat design style_5874427 1.svg" alt="contact form illustration">
            </div>
        </section>
    </main>

<?php include_once "layouts/Footer.php" ?>


</body>
</html>