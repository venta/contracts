<?php declare(strict_types = 1);

namespace Venta\Contracts;

use Abava\Container\Contract\{
    Caller, Container
};

/**
 * Interface Application
 *
 * @package Venta\Contracts
 */
interface Application extends Container, Caller
{
    /**
     * Returns application version string
     *
     * @return string
     */
    public function version(): string;

    /**
     * Defines, if application is running in CLI
     *
     * @return bool
     */
    public function isCli(): bool;

    /**
     * Returns environment name application is running in
     *
     * @return string
     */
    public function environment(): string;

    /**
     * Defines, if application is in local environment
     *
     * @return bool
     */
    public function isLocalEnvironment(): bool;

    /**
     * Defines, if application is in stage environment
     *
     * @return bool
     */
    public function isStageEnvironment(): bool;

    /**
     * Defines, if application is in live environment
     *
     * @return bool
     */
    public function isLiveEnvironment(): bool;

    /**
     * Defines, if application is in local environment
     *
     * @return bool
     */
    public function isTestEnvironment(): bool;

    /**
     * First function, called in application constructor
     * Is used in order to set up application, before running it.
     */
    public function configure();

    /**
     * Loads extension providers and adds bindings
     *
     * @return  void
     */
    public function bootExtensionProviders();

    /**
     * Function, called in order to terminate application.
     *
     */
    public function terminate();
}