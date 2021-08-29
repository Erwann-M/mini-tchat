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
     * @param [type] $name
     * @param string $class
     * @param [type] $label
     * @return void
     */
    public function input($name, $label, $class = "input") {
        echo '<div class="input__container">';

            echo "<label for='{$name}' class='{$class}__label'>{$label}</label>";
            echo $this->surround("<input type='{$this->typeOfInput}' name='{$name}' id='{$name}' class='{$class}'>");

        echo '</div>';
    }

    public function submit($nameOfbtn) {
        echo "<button type='submit' class='btn__form'>{$nameOfbtn}</button>";
    }
}