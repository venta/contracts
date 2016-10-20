<?php declare(strict_types = 1);

namespace Venta\Contracts\Container;

/**
 * Interface ObjectInflector
 *
 * @package Venta\Contracts\Container
 */
interface ObjectInflector extends ArgumentResolverAware
{
    /**
     * Add new object inflection to be applied.
     *
     * @param string $id
     * @param string $method
     * @param array $arguments
     */
    public function addInflection(string $id, string $method, array $arguments = []);

    /**
     * Apply inflections to the subject object.
     *
     * @param $object
     * @return mixed
     */
    public function applyInflections($object);
}