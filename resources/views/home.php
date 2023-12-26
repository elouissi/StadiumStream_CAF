<?php //ob_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>
        table{
            width:100%;
        }

    </style>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <h1>Table d'equipe</h1>
        <p><a href="/mvc/Team/create/" ><i class="fa fa-plus-square"></i>Ajouter equipe</a></p>
        <table id="test-table" border="1">
            <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Cups</th>
                <th>Status</th>
            </tr>
            </thead>
            <tfoot></tfoot>
            <tbody>
            <?php if (!empty($result)) {
                foreach ($result as $team){ ?>
                <tr>
                    <td><?= $team->id; ?></td>
                    <td><?= $team->name; ?></td>
                    <td><?= $team->cups; ?></td>
                    <td>
                        <a href="/mvc/Team/destroy/<?= $team->id ?>">Delete</a>
                        <a href="/mvc/Team/update/<?= $team->id ?>">Update</a>
                    </td>
                </tr>
            <?php }} ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>