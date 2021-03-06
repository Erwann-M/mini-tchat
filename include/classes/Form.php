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
   
    /**
     * Undocumented function
     *
     * @param string $name
     * @param string $class
     * @param string $label
     * 
     * @return void
     */
    public function input($name, $label, $class = "input") {
        echo '<div class="input__container">';

            echo "<label for='{$name}' class='{$class}__label'>{$label}</label>";
            echo $this->surround("<input type='{$this->typeOfInput}' name='{$name}' id='{$name}' class='{$class}'>");

        echo '</div>';
    }

    public function textArea($name, $placeholder, $id, $cols = 100, $rows = 8) {
        echo "<textarea name='{$name}' id='{$id}' cols='{$cols}' rows='{$rows}' placeholder='{$placeholder}' class='textarea__input'></textarea>";
    }

    public function submit($nameOfbtn) {
        echo "<button type='submit' class='btn__form'>{$nameOfbtn}</button>";
    }
}
?>
