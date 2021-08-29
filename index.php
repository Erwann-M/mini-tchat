<?php
// ==============================================================
// =================== Point d'entré ============================
// ==============================================================

session_start();

// ==============================================================
// inclusion du fichier de debug --------------------------------
require __DIR__ . '/include/tools/kint.phar';

// inclusion des classes ----------------------------------------
require __DIR__ . '/include/classes/Bdd.php';
require __DIR__ . '/include/classes/User.php';
require __DIR__ . '/include/classes/Form.php';

// connexion a la base de donnée via la classe "Bdd" ------------
$pdo = new Bdd();
$bdd = $pdo->connectionBDD();

// inclusion des fonction d'ajout et de verification de compte --
require __DIR__ . '/include/function/addUserInDataBase.php';
require __DIR__ . '/include/function/verifyAccount.php';
// ==============================================================

// ==============================================================
// systeme de navigation entre les templates (via l'url) --------
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
} else {
    $templateStart = 'home';
}
// ==============================================================

// affichage des templates --------------------------------------
require __DIR__ . "/include/template/header.tpl.php";
require __DIR__ . "/include/template/{$templateStart}.tpl.php";
require __DIR__ . "/include/template/footer.tpl.php";
