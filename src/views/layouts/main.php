<?php

/** @var LiteMvc\Core\View $this */

app\assets\AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>

<body class="wrap">

    <?php $this->beginBody() ?>

    <div class="wrapper">
        <?= $this->render('header.php') ?>

        <?= $this->render(
            'content.php',
            ['content' => $content]
        ) ?>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>