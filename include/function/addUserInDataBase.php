<?php
// ========================================================
// ========== Fonction d'ajout en base de donnée ==========
// ========================================================

function addUserInDatabase($bdd) {

    if (!empty($_POST['pseudoInscript']) && !empty($_POST['password1']) && !empty($_POST['password2'])) {
    
        $pseudo    = $_POST['pseudoInscript'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
    
        $user = new User();
        $user->setPseudo($pseudo);
        $user->setPassword1($password1);
        $user->setPassword2($password2);

        $pseudo = $user->getPseudo();
        $password = $user->getFinalPassword();

        $req = $bdd->prepare("INSERT INTO users (pseudo, `password`) VALUES (:pseudo, :userPassword);");

        $result = $req->execute(array(
            'pseudo'       => $pseudo,
            'userPassword' => $password
        ));

        if ($result > 0) {
            return true;
        }
    
    } else {
        return false;
    }
}
