<?php

class View {

    function __construct() {
        //echo 'This is View!';
    }
    
    public function render($name){
        require 'Views/' . $name . '.php';
    }

}

