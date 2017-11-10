<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
       //echo "Index page! <br>";
       $this->view->welcom_msg = "Social Network!";
       $this->view->title = 'Dobro došli!';
       $this->view->render('index/index');
    }

}