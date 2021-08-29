<?php
// inclusion du fichier de debug
require __DIR__ . '/include/tools/kint.phar';
require __DIR__ . '/include/classes/Bdd.php';
require __DIR__ . '/include/classes/User.php';
require __DIR__ . '/include/function/addUserInDataBase.php';

$pdo = new Bdd();
$bdd = $pdo->connectionBDD();




// inclusion du fichier de creation de formulaire.
require __DIR__ . '/include/classes/Form.php';

$templateStart = '404';

if (!empty($_GET['page'])) {

    if ($_GET['page'] === 'inscription') {
        $templateStart = 'inscription';

    } else if ($_GET['page'] === 'addUser') {
        $templateStart = 'addUser';

    } else if ($_GET['page'] === 'connexion') {
        $templateStart = 'connexion';
    }

} else if (empty($_SESSION['username'])) {
    $templateStart = 'connexion';
}


require __DIR__ . "/include/template/header.tpl.php";
require __DIR__ . "/include/template/{$templateStart}.tpl.php";
require __DIR__ . "/include/template/footer.tpl.php";

