<?php

declare(strict_types=1);

namespace SzepeViktor\PhpCsFixer\Laravel;

class ConfigurationFactory
{
    /**
     * @param array<string, array<mixed>|bool> $array
     * @return array<string, array<mixed>|bool>
     */
    public static function preset(array $array): array
    {
        return $array;
    }
}
