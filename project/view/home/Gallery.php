<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
</head>
<body>
<div>

    <?php
    if(gettype($data)  == 'array') : ?>
        <?php foreach ($data as $row) : ?>
            <?php foreach ($row as $key=>$value) : ?>

                <?=$key .' '.$value ?>
                <br>

            <?php endforeach;?>
        <?php endforeach;?>
    <?php endif; ?>

    <p>Hallo World</p>
    <p>It's page <b>'Gallery'</b></p>
</div>
</body>
</html>
