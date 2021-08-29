<?php

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {

    $pseudo   = $_POST['pseudo'];
    $password = $_POST['password'];

    $searchPseudo   = $bdd->query("SELECT * FROM users WHERE pseudo     = '{$pseudo}'");
    $findPseudo     = $searchPseudo->fetch();
    $searchPassword = $bdd->query("SELECT * FROM users WHERE `password` = '{$password}'");
    $findPassword   = $searchPassword->fetch();

    if ($findPseudo['pseudo'] === $pseudo) {

        if ($findPassword['password'] === $password) {

            if ($findPseudo['id'] === $findPassword['id']) {
                
                $_SESSION['username'] = $findPseudo['pseudo'];
            }
        }
    }
}
