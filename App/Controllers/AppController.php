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
            // INDICE INDEFINIDO

            $disciplina->salvar();

            // header('Location: /dashboard');

        }

        else {
            header('Location: /?login=erro');
        }
    }

    public function avaliacao() {
        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            
            $avaliacao = Container::getModel('Avaliacao');

            $avaliacao->__set('avaliacao', $_POST['avaliacao']);
            $avaliacao->__set('id_usuario', $_SESSION['id']);
            // INDICE INDEFINIDO

            $avaliacao->salvar();

            // header('Location: /dashboard');

        }

        else {
            header('Location: /?login=erro');
        }
    }

    public function professor() {
        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            
            $professor = Container::getModel('Professor');

            $professor->__set('professor', $_POST['professor']);
            $professor->__set('id_usuario', $_SESSION['id']);
            // INDICE INDEFINIDO

            $professor->salvar();

            // header('Location: /dashboard');

        }

        else {
            header('Location: /?login=erro');
        }
    }

    public function anotacao() {
        session_start();

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            
            $anotacao = Container::getModel('Anotacao');

            $anotacao->__set('anotacao', $_POST['anotacao']);
            $anotacao->__set('id_usuario', $_SESSION['id']);
            // INDICE INDEFINIDO

            $anotacao->salvar();

            // header('Location: /dashboard');

        }

        else {
            header('Location: /?login=erro');
        }
    }
}


?>