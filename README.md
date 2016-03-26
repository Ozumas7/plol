 PLoL
-------------
[![Build Status](https://travis-ci.org/Ozumas7/plol.svg?branch=master)](https://travis-ci.org/Ozumas7/plol)
[![Latest Stable Version](https://poser.pugx.org/kolter/plol/v/stable)](https://packagist.org/packages/kolter/plol) [![Total Downloads](https://poser.pugx.org/kolter/plol/downloads)](https://packagist.org/packages/kolter/plol) [![Latest Unstable Version](https://poser.pugx.org/kolter/plol/v/unstable)](https://packagist.org/packages/kolter/plol) [![License](https://poser.pugx.org/kolter/plol/license)](https://packagist.org/packages/kolter/plol)

PLoL is a PHP API that tries to simplify with the                [League of Legends API](https://developer.riotgames.com)
The main focus is to add versability and scalability.
It implements a cache system and a rate limiter handler, custom output modes,
custom error codes handler.
### Libraries used
- [guzzlehttp/guzzle](https://github.com/guzzlehttp/guzzle) to handle requests
- [tedivm/stash](https://github.com/tedivm/stash) to handle the cache system
- [symfony/yaml](https://github.com/symfony/yaml) in a Output mode class to output results in yaml


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
In the config/config.json folder there are some parameters you may want to change:


There are some default options that you may consider change:

- **cache:** true means resources will be cached, false won't.
- **region:** default region to the api. (check regions acronym)



Basic Api Usage
-------------
This library use the PSR-4 implementation of namespaces. 
Basic implementation:
``` php
<?php
use Kolter\PLoL\Resources\Game;

include('path/to/vendor/autoload.php');

$game = new Game("{YOUR API KEY HERE}");
echo $game->get(1245678);
```
This is basic usage, you will get the result in json (by default). you can set some option in one specified instance.

``` php
$game = (new Game("{YOUR API KEY HERE}"))->setCache(false)
->setOutputMode(ObjectOutput());
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

