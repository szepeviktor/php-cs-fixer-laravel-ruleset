<?php

declare(strict_types=1);

namespace SzepeViktor\PhpCsFixer\Laravel;

use PhpCsFixer\Config;
use SzepeViktor\PhpCsFixer\Laravel\RuleSet\Laravel;

final class Factory
{
    /**
     * @param array<string, array<mixed>|bool> $overrideRules
     */
    public static function fromLaravelRuleSet(array $overrideRules = []): Config
    {
        $ruleSet = new Laravel();
        $config = new Config('Laravel');

        $config->setRiskyAllowed(true);
        $config->setRules(\array_merge(
            $ruleSet->getRules(),
            $overrideRules
        ));

        return $config;
    }
}
