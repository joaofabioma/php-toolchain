<?php

namespace Src\Routes;

class Api
{
	/**
	 * @var array<string, string|int>
	 */
	protected array $routes = [];

	public function start(): void
	{
		$router = new Router();
		$router->create("GET", "/api", function () {
			header('Content-Type: application/json; charset=utf-8');
			http_response_code(200);
			$msg = "Bem Vindo a Api";
			$timestamp = Date('Y-m-d H:i:s');
			echo json_encode(compact('msg', 'timestamp'));
			return;
		});
		
		$router->create("POST", "/api", function () {
			header('Content-Type: application/json; charset=utf-8');
			http_response_code(200);
			$msg = "Bem Vindo a Api";
			$timestamp = Date('Y-m-d H:i:s');
			echo json_encode(compact('msg', 'timestamp'));
			return;
		});

		$router->init();
	}
}
