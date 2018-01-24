<?php

require_once 'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('default', 'http://neo4j:2friedXs@localhost:7474') // Example for HTTP connection configuration (port is optional)
    // ->addConnection('bolt', 'bolt://neo4j:password@localhost:7687') // Example for BOLT connection configuration (port is optional)
    ->build();


   	// require 'page_action.php';

    $query = 'CREATE (A:ASSET {name: {name} }) RETURN A';
	$parameters = ['name' => $ciName ];
	$client->sendCypherQuery($query, $parameters);

    // $client->run('CREATE (n:Person{name:"Muhammad"})');