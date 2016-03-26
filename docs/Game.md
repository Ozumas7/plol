Game extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/) to more information.

### API
#### get(Integer id) JsonHandler
Return information about a given id game.
``` php
$resource = (new Game())->get(1234);
```