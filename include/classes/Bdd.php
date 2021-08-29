<?php

class Bdd {
    private $user    = 'minitchat';
    private $mdp     = 'minitchat';

    private $dbName  = 'minitchat';
    private $host    = 'localhost';
    private $charset = 'UTF8';

    private $pdo     = null;

    private function setDsn() {

       return "mysql:dbname={$this->dbName};host={$this->host};charset={$this->charset}";

    }

    public function connectionBDD() {

        if ($this->pdo === null) {

            try {
    
                $pdo = new PDO(
                    $this->setDsn(),
                    $this->user,
                    $this->mdp,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    ]
                );
                $this->pdo = $pdo;
    
            } catch (Exception $e) {
    
                die ('Dude !!! Error during the connection to the database');
    
            }
        }

        return $this->pdo;
    }
}