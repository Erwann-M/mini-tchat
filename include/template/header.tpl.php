<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Mini Tchat</title>
</head>
<body>
    <header class="page__header">
        <h1 class="page__title">WawaTchat</h1>
        <?php if(!empty($_SESSION['username'])) : ?>
            <a href="index.php?utils=deconnection" class="btn__link">
                <p class="page__username">Bonjour <?= ucfirst($_SESSION['username']) ?></p>
            </a>
        <?php endif ?>
    </header>
    <div class="container">