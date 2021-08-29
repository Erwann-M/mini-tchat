<?php

class Form {

    private $typeOfInput;
    private $surround = 'p';

    public function setInput($type) {
        $this->typeOfInput = $type;
    }

    private function surround($tags) {
        return "<{$this->surround}>{$tags}</{$this->surround}>";
    }
   

    public function input($name, $class = "input") {
        echo $this->surround("<input type='{$this->typeOfInput}' name='{$name}' class='{$class}'>");
    }

    public function submit($nameOfbtn) {
        echo "<button type='submit' class='btn'>{$nameOfbtn}</button>";
    }
}