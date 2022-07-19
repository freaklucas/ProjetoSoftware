<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['inscreverse'] = array(
			'route' => '/inscreverse',
			'controller' => 'indexController',
			'action' => 'inscreverse'
		);

		$routes['registrar'] = array(
			'route' => '/registrar',
			'controller' => 'indexController',
			'action' => 'registrar'
		);

		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);

		$routes['dashboard'] = array(
			'route' => '/dashboard',
			'controller' => 'AppController',
			'action' => 'dashboard'
		);

		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);

		$routes['disciplina'] = array(
			'route' => '/disciplina',
			'controller' => 'AppController',
			'action' => 'disciplina'
		);

		$routes['avaliacao'] = array(
			'route' => '/avaliacao',
			'controller' => 'AppController',
			'action' => 'avaliacao'
		);

		$routes['professor'] = array(
			'route' => '/professor',
			'controller' => 'AppController',
			'action' => 'professor'
		);
		
		$routes['anotacao'] = array(
			'route' => '/anotacao',
			'controller' => 'AppController',
			'action' => 'anotacao'
		);
		


		$this->setRoutes($routes);
	}

}

?>