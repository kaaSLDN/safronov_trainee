<?php
use yii\bootstrap\NavBar;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safronov</title>
</head>
<body>
<?php


NavBar::begin([
        'brandLabel' => 'Safronov',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
            'class' => 'navbar-default navbar-fixed-top'
    ]
]);
NavBar::end();
?>
<?= $content ?>
</body>
</html>