Neo4j Object Graph Mapper Bundle for Symfony
============================================

## Neo4j OGM

This bundle lets you make use of the Neo4j Graph Database REST API inside your symfony applications.

## Requirements

Requires :  

* Hirevoice Neo4J PHP OGM : https://github.com/lphuberdeau/Neo4j-PHP-OGM

## Installation :

Installation is a quick three-steps process :

#### Add the package in your *composer.json* file

````
"require":
    ....
    "kwattro/neo4j-ogm-bundle": "dev-master"
````

#### Add the bundle to your `AppKernel` :

````
new Kwattro\Neo4jBundle\KwattroNeo4jBundle(),
...
````

#### Configure the bundle in your `config.yml` file :
````
kwattro_neo4j:
    host: "localhost"
    port: 7474
````

## Contributors

Christophe Willemsen : [@kwattro](https://github.com/kwattro)

## License

Bundle under the MIT License