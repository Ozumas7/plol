<?php

namespace Kolter\PLoL;

class UriBuilder
{

    /**
     * @param $args
     * @return mixed
     */
    public static function uriBuilder($args=[])
    {
        $args['host'] = $args['uris']->uri;
        $args['version'] = $args['uris']->{$args['resourceName']}->version;
        $args['base'] = $args['uris']->{$args['apimode']};
        $args['resource'] = $args['uris']->{$args['resourceName']}->resource;
        $args['type'] = $args['uris']->$args['resourceName']->type->$args['type'];
        $args['parameters'] = self::parametersBuilder($args['parameters']);

        return Utility::uriConstructor($args['host'], $args);
    }

    /**
     * @param $parameters
     * @return string
     */
    public static function parametersBuilder($parameters)
    {
        if (is_array($parameters)) {
            $result = '';
            foreach ($parameters as $key => $value) {
                $result .= "&$key=$value";
            }

            return $result;
        }

        return $parameters;
    }
}
