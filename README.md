Neo4j Object Graph Mapper Bundle for Symfony - WIP
==================================================

## Neo4j OGM

This bundle lets you make use of the Neo4j Graph Database REST API inside your symfony applications.  
  
It is momently a WIP as it relies on the [Neo4j-PHP-OGM](https://github.com/lphuberdeau/Neo4j-PHP-OGM) from [lphuberdeau](https://github.com/lphuberdeau) that gives integration with Doctrine Common.  

My main focus is momently the User Management integrated with FOSUB and Neo4j, I will come on this bundle later.  

Contributions for adding compiler to configuration and travis love would be really appreciated !

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