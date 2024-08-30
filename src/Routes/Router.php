<?php

namespace Src\Routes;

class Router
{
	protected array $routes = [];

	public function create(string $method, string $path, callable $callback): void
	{
		$this->routes[$method][$path] = $callback;
	}

	public function init(): mixed
	{
		$httpMethod = $_SERVER["REQUEST_METHOD"];

		if (isset($this->routes[$httpMethod])) {
			foreach ($this->routes[$httpMethod] as $path => $callback) {
				if ($path === $_SERVER["REQUEST_URI"] && is_callable($callback)) {
					return $callback();
				}
			}
		}

		http_response_code(404);
		return null;
	}
}
