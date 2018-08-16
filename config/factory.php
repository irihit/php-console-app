<?php

/**
 * @see https://github.com/zendframework/zend-servicemanager
 * @see https://zendframework.github.io/zend-servicemanager/
 */
return [
    'services' => [
    ],
    'factories' => [
        // Command Factories
        \Irihit\Console\Command\HelloWorldCommand::class
        => \Irihit\Console\Command\HelloWorldCommandFactory::class,
    ],
    'invokables' => [
    ],
    'aliases' => [
    ],
    'shared' => [
    ],
    'shared_by_default' => false,
];
