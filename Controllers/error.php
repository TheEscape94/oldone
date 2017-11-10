<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
        //echo "Stranica nije pronadjena!";
        
        $this->view->title = 'Greska!';
        $this->view->msg = 'Greška! Stranica nije pronadjena...';
        $this->view->render('error/index');
    }

}
