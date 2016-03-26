CurrentGame extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/methods#!/976) to more information.

### API

#### spectatorgameinfo(Integer $summonerid)
Return a current game info.
``` php
$resource = (new CurrentGame())->spectatorgameinfo(4324543);
```

With given region.
``` php
$resource = (new CurrentGame())->setRegion('kr')->spectatorgameinfo(4324543);
```

**Please note**: Please check the [Regional Endpoints](https://developer.riotgames.com/docs/regional-endpoints)





