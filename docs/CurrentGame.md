CurrentGame extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/) to more information.

### API

#### spectatorgameinfo(String $plataformid, Integer $summonerid) Resource
Return a current game info.
``` php
$resource = (new CurrentGame())->spectatorgameinfo("euw",4324543);
```

**Please note**: Please check the [Regional Endpoints](https://developer.riotgames.com/docs/regional-endpoints) and do
not use the platform ID, just the region acronym.

#### Acronyms

	euw = Europe West
    na = North America
    eune = Europe Nordic East
    kr = Korea
    br = Brazil
    lan = Latin Amaerica North
    las = Latin America South
    oce = Oceania
    tr = Turkey
    ru = Russia
    pbe = PBE



