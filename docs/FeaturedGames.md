FeaturedGames extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/) to more information.

### API
#### featured() JsonHandler
return a collection of featured games.
``` php
$resource = (new FeaturedGames())->featured();
```
