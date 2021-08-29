<?php

// ==========================================================
// == class user pour quelques verifications (a améliorée) ==
// ==========================================================

class User {
    private $pseudo;
    private $password1;
    private $password2;
    private $finalPassword;

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo() {

        return $this->pseudo;
    }
    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo) {

        $cleanPseudo = htmlspecialchars($pseudo);
        $this->pseudo = $cleanPseudo;
    }
    /**
     * Set the value of password1
     *
     * @return  self
     */ 
    public function setPassword1($password1) {

        $this->password1 = $password1;
    }
    /**
     * Set the value of password2
     *
     * @return  self
     */ 
    public function setPassword2($password2) {

        $this->password2 = $password2;
    }

    public function getFinalPassword() {

        if ($this->password1 === $this->password2) {
            $this->finalPassword = $this->password1;
        }
        return $this->finalPassword;
    }

}