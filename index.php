<?php
// inclusion du fichier de debug
require __DIR__ . '/include/tools/kint.phar';

// inclusion du fichier de creation de formulaire.
require __DIR__ . '/include/classes/Form.php';

$templateStart = '404';

if (!empty($_GET['page'])) {

    if ($_GET['page'] === 'inscription') {
        $templateStart = 'inscription';
    }

} else if (empty($_SESSION['username'])) {
    $templateStart = 'connexion';
}


require __DIR__ . "/include/template/header.tpl.php";
require __DIR__ . "/include/template/{$templateStart}.tpl.php";
require __DIR__ . "/include/template/footer.tpl.php";

