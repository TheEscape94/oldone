<?php

class Dashboard extends Controller{

    function __construct() {
        parent::__construct();
        $this->view->msg = "This is Dashboard!<br> "
                . "Only register members";
        $this->view->title = "Social Network";
        $this->view->render('dashboard/index');
    }

}
