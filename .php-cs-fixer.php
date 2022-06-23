<?php

use SzepeViktor\PhpCsFixer\Laravel\Factory;

$config = Factory::fromLaravelRuleSet();

$config->getFinder()
    ->in([
        __DIR__ . '/src',
    ])
;

return $config;
