<?php

class Page extends Controller {
    
        function __construct() {
            parent::__construct();
            //echo "We are in the 'Help' page!<br>";
            $this->view->title = "Page";
            $this->view->render('pages/page');
        }

        
}
