League extends [ResourceHandler](ResourceHandler.md)
-------------
Consults the [League of Legends API](https://developer.riotgames.com/api/) to more information.

### API
#### bysummoner() JsonHandler
Returns all leagues for specified summoners and summoners' teams. Entries for each requested participant (i.e., each summoner and related teams) will be included in the returned leagues data, whether or not the participant is inactive. However, no entries for other inactive summoners or teams in the leagues will be included.
``` php
$resource = (new League())->bysummoner(35066901);
```

It is allowed up to 10 summoners id separated by commas.

``` php
$resource = (new League())->bysummoner('35066901,35066903,35066904');
```
#### bysummonerentry() JsonHandler
Returns all league entries for specified summoners and summoners' teams.
``` php
$resource = (new League())->bysummonerentry(35066901);
```

It is allowed up to 10 summoners id separated by commas.

``` php
$resource = (new League())->bysummonerentry('35066901,35066903,35066904');
```
#### byteam() JsonHandler
Returns all leagues for specified teams. Entries for each requested team will be included in the returned leagues data, whether or not the team is inactive. However, no entries for other inactive teams in the leagues will be included.
``` php
$resource = (new League())->byteam(123565);
```

It is allowed up to 10 summoners id separated by commas.

``` php
$resource = (new League())->byteam('123565,123365,123525');
```