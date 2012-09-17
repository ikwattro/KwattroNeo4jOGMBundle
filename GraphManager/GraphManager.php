<?php

namespace Kwattro\Neo4jBundle\GraphManager;

use HireVoice\Neo4j\EntityManager;
use HireVoice\Neo4j\Meta\Repository as MetaRepository;
use HireVoice\Neo4j\Proxy\Factory as ProxyFactory;
use Everyman\Neo4j\Client;

class GraphManager extends EntityManager
{

	protected $manager;

	protected $metaRepository;

	public function __construct(Client $client, MetaRepository $metaRepository, $proxy_dir, $configuration = null)
	{
		$this->proxyFactory = new ProxyFactory($proxy_dir);
		parent::__construct($configuration);
	}
}
