<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        //echo "We are in the 'Help' page!<br>";
        $this->view->title = "Podrška";
        $this->view->render('pages/podrska');
    }
    
    public function Other($arg = false){
        echo "We are inside Other!<br>";
        echo "Promenljiva: " . $arg . "<br>";
        
        require 'Models/help_model.php';
        $model = new Help_Model();
    }
}