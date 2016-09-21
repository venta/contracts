<?php declare(strict_types = 1);

namespace Venta\Contracts\Application;

/**
 * Interface HttpApplication
 *
 * @package Venta\Contracts
 */
interface HttpApplication
{

    /**
     * Runs HTTP Application
     *
     * @return void
     */
    public function run();

}