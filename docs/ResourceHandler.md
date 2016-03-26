ResourceHandler (abstract class)
-------------
Every resource extends from this class.
It handles the building process of attributes, gets the URI of the resouce and asks the RequestHandler the resource.

[Click here to a longer explanation](#explanation)

### API

#### __construct() 
Constructor of the class, it hasn't got any arguments.,

```php
$game = new Champion();

```


#### getErrors() ErrorHandler
Gets an ErrorHandler object of the class in order to check if there are some errors and why has failed.
[Click here to know more about the ErrorHandler class](ErrorHandler.md)

```php
$game = new Champion();
$errors = $game->getErrors();
echo $errors->getErrorMessages();
```

#### getUriResource() String
Get the uri to the League of Legends API of the resource built.

```php
$game = new Champion();
$game->get(12355);
$cacheName = $game->getResourceUri();
//It will output https://euw.api.pvp.net/api/lol/euw/v1.2/champion/12355?api_key={YOUR API KEY HERE}

```

#### setApiKey	(String $apikey) $this
Set a different api key to the resource (this is not permanent, just in this instance).

```php
$game = (new Champion())->setApiKey("{API KEY}");
```

#### setCache(boolean $cache) $this
If true results will be cached, if it is false it won't

```php
$game = (new Champion())->setCache(true);
```

#### setCacheTimeExpired(Integer $time) $this
Sets how many minutes the cache will expire.

```php
$game = (new Champion())->setCacheTimeExpired(60);
```

#### setConfigFile(String $file,String $folder=config) $this
Change the config file file, this can be userful in order to build tests around diferent configuration or ApiKeys

```php
$game = new Champion();
$game->setConfigFile("config.dev");
//Now, this object will use the config indicates in the file in config/config.dev.json
```

#### setRegion(String $region) void
Sets the region of the request.

```php
$game = (new Champion())->setRegion("na");
```

#### setOutputMode(string $outputMode) void
Sets the output mode of the resource. it may be:

**arr:** Array

**obj:** PHP Oject

**json:** JSON (Javascript Object)

**yaml:** Yaml

```php
$game = (new Champion())->setOutputMode("obj");
```

#### renewCache() void
Shortcode to setCacheTimeExpired (0).

```php
$game = (new Champion())->renewCache();
```
