<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {
    
    public function dashboard() {
        
        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            $this->render('dashboard');
        }

        else {
            header('Location: /?login=erro');
        }


    } 
}


?>