FeaturedGames extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/methods#!/977) to more information.

### API
#### featured() 
return a collection of featured games.
``` php
$resource = (new FeaturedGames())->featured();
```
