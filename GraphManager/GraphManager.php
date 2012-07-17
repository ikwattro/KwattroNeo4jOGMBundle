<?php

namespace Kwattro\Neo4jBundle\GraphManager;

use HireVoice\Neo4j\EntityManager;
use HireVoice\Neo4j\MetaRepository;
use Everyman\Neo4j\Client;

class GraphManager extends EntityManager
{

	protected $manager;

	protected $metaRepository;

	public function __construct(Client $client, MetaRepository $metaRepository)
	{
		parent::__construct($client, $metaRepository);
	}
}
