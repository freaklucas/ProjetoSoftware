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

    public function disciplina() {
        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            $disciplina = Container::getModel('Disciplina');

            $disciplina->__set('disciplina', $_POST['disciplina']);
            $disciplina->__set('id_usuario', $_SESSION['id']);
            $disciplina->__set('nome', $_POST['nome']);
            $disciplina->__set('professor', $_POST['professor']);
            $disciplina->__set('anotacoes', $_POST['anotacoes']);
            $disciplina->__set('notas', $_POST['notas']);


            $disciplina->salvar();

            // $this->render('disciplina');

            // echo '<pre>';
            // print_r($_POST);
            // echo '</pre>';
        }

        else {
            header('Location: /?login=erro');
        }
    }
}


?>