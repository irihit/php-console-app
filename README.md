# php-console-app
Console application sample

use [Symfony The Console Component](https://symfony.com/doc/current/components/console.html), [Zend ServiceManager](https://github.com/zendframework/zend-servicemanager)

## Application Configuration

use config/config.yaml

```yaml
name: php-console-app
version: "1.0.0"
commands:
  - Irihit\Console\Command\HelloWorldCommand
```

## Application Factory Configuration

use config/factory.php

```php
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
```

## Usage

### Hello World

```bash
php console hello-world
```

## Special Thanks

[Yuuki Takezawa (ytake)](https://github.com/ytake)
