<?php

declare(strict_types=1);

namespace SzepeViktor\PhpCsFixer\Laravel\RuleSet;

final class Laravel
{
    protected const PINT_URL = 'https://github.com/laravel/pint/raw/main/resources/presets/laravel.php';

    protected const LOCAL_CACHE_PATH = '.php-cs-fixer.laravel.cache';

    /**
     * @return array<string, array<mixed>|bool>
     */
    public function getRules(): array
    {
        if (! is_file(self::LOCAL_CACHE_PATH)) {
            $pintFileContents = file_get_contents(self::PINT_URL);
            if ($pintFileContents === false) {
                throw new \Exception('Failed to download '.self::PINT_URL);
            }

            file_put_contents(
                self::LOCAL_CACHE_PATH,
                str_replace('App\\Factories', 'SzepeViktor\\PhpCsFixer\\Laravel', $pintFileContents)
            );
        }

        return array_filter(
            require self::LOCAL_CACHE_PATH,
            static function ($ruleName) {
                return strpos($ruleName, 'Laravel/') !== 0;
            },
            \ARRAY_FILTER_USE_KEY
        );
    }
}
