<?php

namespace Kwattro\Neo4jBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KwattroNeo4jBundle extends Bundle
{
	private $autoloader;

	public function boot()
	{
		$dir = $this->container->getParameter('kwattro_neo4j.proxy_dir');

		$this->autoloader = function($class) use ($dir, &$container) {
		$filename = $class;
		$file = $dir . DIRECTORY_SEPARATOR . $filename.'.php';
		if(file_exists($file))
		{
			require $file;
		}
	};
		spl_autoload_register($this->autoloader);
	}

	public function shutdown()
	{
		if(null !== $this->autoloader) {
			spl_autoload_unregister($this->autoloader);
			$this->autoloader = null;
		}
	}
}
