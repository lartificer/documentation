<?php

namespace Grav\Common;

/**
 * Offers composer helper methods.
 *
 * @author  eschmar
 * @license MIT
 */
class Composer
{
    /** @const Default composer location */
    const DEFAULT_PATH = "bin/composer.phar";

    /**
     * Returns the location of composer.
     *
     * @return string
     */
    public static function getComposerLocation()
    {
        if (!function_exists('shell_exec') || strtolower(substr(PHP_OS, 0, 3)) === 'win') {
            return self::DEFAULT_PATH;
        }

        // check for global composer install
        $path = trim(shell_exec("command -v composer"));

        // fall back to grav bundled composer
        if (!$path || !preg_match('/(composer|composer\.phar)$/', $path)) {
            $path = self::DEFAULT_PATH;
        }

        return $path;
    }

    public static function getComposerExecutor()
    {
        $executor = PHP_BINARY . ' ';
        $composer = static::getComposerLocation();

        if ($composer !== static::DEFAULT_PATH && is_executable($composer)) {
            $file = fopen($composer, 'r');
            $firstLine = fgets($file);
            fclose($file);

            if (!preg_match('/^#!.+php/i', $firstLine)) {
                $executor = '';
            }
        }

        return $executor . $composer;
    }
}
