<?php

namespace App\Controllers;


use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function inscreverse() {
		$this->render('inscreverse');
	}

	public function registrar() {
		$usuario = Container::getModel('Usuario');
		
		$usuario->__set('nome', $_POST['nome']);
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', md5($_POST['senha']));

		if ($usuario->validarCadastro()) {
			if(count($usuario->getUsuarioPorEmail()) == 0 ) {
				$usuario->salvar();

				$this->render('cadastro');
			}
			

		} else {
			
			$this->render('/');
		}

		// $this->render('registrar');
	}


}


?>