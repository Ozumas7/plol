ResourceHandler (abstract class)
-------------
Every resource extends from this class.
It handles the building process of attributes, gets the URI of the resouce and asks the RequestHandler the resource.


## Use

First you need to instanciate a Resource class (champion, staticdata, summoner etc..) with an Api Key

```php
$champion = new Champion('{YOUR API KEY HERE'});

```

Then use what method you want.

** For Example**: The Champion class has a **get** method that returns all champions or a unique champion if $id is given

```php
$champion = new Champion('{YOUR API KEY HERE'});
echo $champion->get('12'); //Returns a champion with id '12'
echo $champion->get(); //Returns all champions

```

Please check docs to full explanation of methods of different resource classes.

### How to set a specify a region

```php
$champion = new Champion('{YOUR API KEY HERE'})->setRegion('na');

```
**Please note**: Please check the [Regional Endpoints](https://developer.riotgames.com/docs/regional-endpoints)

## How to set an output mode

```php
$champion = new Champion('{YOUR API KEY HERE'})->setOutputMode(new ObjectOutput());

```

It will return a php object.

** Output modes available**:
- Json: JsonOutput() (*by default*)
- php object: ObjectOutput()
- php array: ArrayOutput()
- yaml: YamlOutput()

[Check this section to create new Output modes](#How to create new output modes)

## How to activate/deactivate cache in a specific resource

```php
$noncachedchampion = new Champion('{YOUR API KEY HERE'})->setCacheMode(false);
$cachedchampion = new Champion('{YOUR API KEY HERE'})->setCacheMode(true);

```

## How to set an ErrorCodeHandler

By default, it will be used the **ErrorCodeHandler** class that implements the **ErrorCodeInterface**. 
This class implement new error code messages and  a rate limiter sleep mode: If you reach the rate limit of your api key, the system will sleep by numbers of seconds left.

If you don't want this, just use the **NoSleepIfRateLimited()** class that will output messages code as the LOL API does and won't sleep as well.

```php
$champion = new Champion('{YOUR API KEY HERE'})->setErrorCodeHandler(new NoSleepIfRateLimited());

```

If you want to implements your own error code handler, please [check this section](#How to implement my own error code handler)

## How to get a resource by a custom url

Create an instance of any resource and use the **getCustomResource($url)**
```php
$champion = new Champion('{YOUR API KEY HERE'})
->getCustomResource('https://euw.api.pvp.net/api/lol/euw/v1.2/champion?api_key={{yourapikey}}');

```
So this seems pretty dumb but it is an approach of what I want to do in the future: create a general library that get and url and implements all what this library does.
So in the future plol will be a library that create uris of the League of Legends methods and will use a new library that cache results, handler errors etc...

##How to create new output modes

Create a class, name it as you wish and implements the **OutputInterface** and create a **load($resource)** method that get a json resource so you can modify this resource as you wish.

### TextOutput

In this example I will create a **TextOutput** class that will return resources in plain text
So I created a class called **TextOutput** and implements the **OutputInterface**

```php
namespace YourNameSpace;

use Kolter\PLoL\Interfaces\OutputInterface;

class TextOutput implements OutputInterface
{

    public function load($resource){
        $result =$resource;
        $result = str_replace('{','',$result);
        $result = str_replace('}','',$result);
        $result = str_replace('[','<br>',$result);
        $result = str_replace(']<br>','',$result);
        $result = str_replace('"','',$result);
        $result = str_replace(',','<br>',$result);
        return $result;
    }
}

```

So this will output the resource as text. Then you just have to add it to the resource you want to output this way

``` php
$champion = new Champion('{YOUR API KEY HERE'})->setOutputMode(new TextOutput());

```