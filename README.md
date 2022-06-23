# php-cs-fixer-config

## Installation

Run

```sh
composer require --dev szepeviktor/php-cs-fixer-laravel-ruleset
```

## Usage

### Configuration

Create a configuration file `.php-cs-fixer.php` in the root of your project:

```php
use SzepeViktor\PhpCsFixer\Laravel\Factory;

$config = Factory::fromLaravelRuleSet();

$config->getFinder()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
;

return $config;
```
