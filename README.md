 PLoL
-------------
[![Build Status](https://travis-ci.org/Ozumas7/plol.svg?branch=master)](https://travis-ci.org/Ozumas7/plol)
[![Latest Stable Version](https://poser.pugx.org/kolter/plol/v/stable)](https://packagist.org/packages/kolter/plol) [![Total Downloads](https://poser.pugx.org/kolter/plol/downloads)](https://packagist.org/packages/kolter/plol) [![Latest Unstable Version](https://poser.pugx.org/kolter/plol/v/unstable)](https://packagist.org/packages/kolter/plol) [![License](https://poser.pugx.org/kolter/plol/license)](https://packagist.org/packages/kolter/plol)

PLoL is a PHP API that tries to simplify with the                [League of Legends API](https://developer.riotgames.com)
The main focus of the library is to using POO and the builder of uris. 
It has been implemented a cache system and a rate-limiter handler.



How to install
-------------
Using [Composer](https://getcomposer.org/) 


``` 
composer require "kolter/plol" dev-master
```
**composer.json**

```
"require":
{
"kolter/plol":"dev-master"
}
```


Configuration
-------------


First of all, get your [League of Legends API KEY](https://developer.riotgames.com/). You will need this api key to instance resources.
Anyways in the config/config.json folder there are some parameters you may want to change:


There are some options that you may consider change:

- **cache:** sets default to cache results.
- **output:** default output mode.
-  **cacheFileTimeExpire:** default time cached results to expire.
-   **region:** default region to the api.

You can also use the ConfigHandler class and some static method you can use to edit the file in php.

``` php
ConfigHandler::setDefaultOutputMode('obj');

```

Basic Api Usage
-------------
This library use the PSR-4 implementation of namespaces, this is a basic implementation
``` php
<?php
use Kolter\PLoL\Resources\Game;

include('path/to/vendor/autoload.php');
$game = new Game("{YOUR API KEY HERE}");
$game->get(1245678)->games->fellowPlayers[0]->teamId;
```
This is basic usage, you will get the result in json (by default). you can set some option in one specified instance.

``` php
$game = (new Game("{YOUR API KEY HERE}"))->setCache(false)->setOutputMode('obj');
$game->get(1245678)->games->fellowPlayers[0]->teamId;
```
Take a look at the [ResourceRequest class API](docs/ResourceRequest) for more information.

Structure
-------------
Resources are what you can get in the [League of Legends API](https://developer.riotgames.com/api/).
Bellow there are different resources and how to use them, with examples.

### [ResourceHandler](docs/ResourceHandler.md)
Every resource class extends from this. This is where the core is. 

### [Champion](docs/Champion.md)
Get info of a specific champion

### [Featured Games](docs/FeaturedGames.md)
Get info of the current game.

### [Game](docs/Game.md)
Get info of the current game.

### [League](docs/League.md)
Get info of the current game.

