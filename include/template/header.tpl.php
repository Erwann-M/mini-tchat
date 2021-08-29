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
        <p>Bonjour <?= $_SESSION['username'] ?></p>
    </header>
    <div class="container">