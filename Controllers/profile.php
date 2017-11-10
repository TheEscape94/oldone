<?php

class Profile extends Controller{

    function __construct() {
        parent::__construct();
        $this->view->msg = "This is Profile!<br> "
                . "Only register members";
        $this->view->title = "Profile";
        $this->view->render('profile/index');
    }

}