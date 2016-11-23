<?php declare(strict_types = 1);

namespace Venta\Contracts\Routing;

use FastRoute\RouteParser;

/**
 * Interface RoutePathParser
 *
 * @package Venta\Contracts\Routing
 */
interface RoutePathParser extends RouteParser
{

    /**
     * Adds regular expression alias.
     *
     * @param $alias
     * @param $regexp
     * @return void
     */
    public static function addRegexAlias(string $alias, string $regexp);

    /**
     * Replaces known regex aliases.
     *
     * @param string $path
     * @return string
     */
    public static function replaceRegexAliases(string $path): string;
}