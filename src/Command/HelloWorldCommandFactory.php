<?php
declare(strict_types=1);

namespace Irihit\Console\Command;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class HelloWorldCommandFactory
 */
final class HelloWorldCommandFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param array|null         $options
     *
     * @return HelloWorldCommand
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): HelloWorldCommand
    {
        return new HelloWorldCommand();
    }
}
