<?php declare(strict_types = 1);

namespace Venta\Contracts\Kernel;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Interface ConsoleKernelContract
 *
 * @package Venta
 */
interface ConsoleKernelContract extends AbstractKernelContract
{
    /**
     * Main application handle function
     * Returns status to exit with
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return int
     */
    public function handle(InputInterface $input = null, OutputInterface $output = null): int;

}