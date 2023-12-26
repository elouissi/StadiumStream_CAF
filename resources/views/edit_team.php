<?php
$team=$result;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <h1>Table d'equipe</h1>
        <p><a href="/mvc/Team/index/" ><i class="fa fa-plus-square"></i>Equipes</a></p>
        <form action="/mvc/Team/edit/<?= $team->getId() ?>" method="POST">
            <table>
                <tr>
                    <td>Name</td>
                    <td>Cups</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" id="name" value="<?= $team->getName() ?>"></td>
                    <td><input type="text" name="cups" id="cups" value="<?= $team->getCups() ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btn_submit" id="btn_submit" value="Modifier"></td>
                    <td></td>
                </tr>
            </table>
        </form>

    </div>
</div>
</body>
</html>