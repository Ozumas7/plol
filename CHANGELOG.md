# PLoL v1.0.0 Changelog

First released of plol, a PHP interface wrapper of the League of Legends API.

Some of the features:

- **Caching results:** Build with [tedivm/stash](https://github.com/tedivm/stash). Is optional and it is able to change the amout of minutes results with stay in cache

- **Custom Output modes**: PLOL will output results in JSON by default, there are some output modes available as well like PHP Object, PHP Array and YAML. But it is possible to add news output modes by implementing the *OutputModeInterface"

- **Custom Error codes**: PLOL has custom error messages with the ErrorCodeHandler class and will be pause if it has be reached the rate limit of your Api key. But you can implement your own handler implementing the *ErrorCodeInterface*.

- **Scalable**: If the League of Legends API is changed, plol can be updated just changing the config/uris.json file or if it is added new resources, it can be implemented fast creating a new class for each new resource and changing the uris.json file. See more in docs.

- **Tested**: It is not tested entirely but It covers all resources in normal tests. It will be implemented more tests in the future though.

- **Custom callls**: It is available to do custom calls using the getCustomResource($uri) method in the ResourceHandler class