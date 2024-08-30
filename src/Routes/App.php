<?php

namespace Src\Routes;

use Src\Routes\Api;
use Src\Routes\Router;

class App
{
	public function start(): void
	{
		$router = new Router();
		$router->create("GET", "/", function () {
			http_response_code(200);
			echo "/";
			return;
		});

		$router->create("GET", "/site", function () {
			http_response_code(200);
			echo json_encode(["msg" => "Bem Vindo ao Site"]);
			return;
		});

		$router->create("GET", "/api", function () {
			$api = new Api();
			$api->start();
			return;
		});

		$router->create("POST", "/api", function () {
			$api = new Api();
			$api->start();
			return;
		});

		$router->init();
	}
}
