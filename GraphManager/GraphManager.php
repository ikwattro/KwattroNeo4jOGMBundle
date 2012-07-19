<?php

namespace Kwattro\Neo4jBundle\GraphManager;

use HireVoice\Neo4j\EntityManager;
use HireVoice\Neo4j\MetaRepository;
use HireVoice\Neo4j\ProxyFactory;
use Everyman\Neo4j\Client;

class GraphManager extends EntityManager
{

	protected $manager;

	protected $metaRepository;

	public function __construct(Client $client, MetaRepository $metaRepository, $proxy_dir)
	{
		$this->proxyFactory = new ProxyFactory($proxy_dir);
		parent::__construct($client, $metaRepository, $proxy_dir);
	}
}
