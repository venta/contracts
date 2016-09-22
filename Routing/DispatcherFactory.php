<?php declare(strict_types = 1);

namespace Venta\Contracts\Routing;

use FastRoute\Dispatcher;

/**
 * Interface DispatcherFactory
 *
 * @package Venta\Contracts\Routing
 */
interface DispatcherFactory
{

    /**
     * Make dispatcher instance and pass $data array
     *
     * @param array $data
     * @return Dispatcher
     */
    public function create(array $data): Dispatcher;

}