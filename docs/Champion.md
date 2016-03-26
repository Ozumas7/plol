Champion extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/) to more information.

### API

#### get(Integer $id) JsonHandler
return a collection of champions, if **$id** is given, returns the information of the given champion id.
``` php
$resource = (new Champion())->get();
$resource = (new Champion())->get(45);
```

