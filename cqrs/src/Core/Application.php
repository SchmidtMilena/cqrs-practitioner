<?php

declare(strict_types=1);

namespace App\Core;

use Illuminate\Foundation\Application as LaravelApplication;

class Application extends LaravelApplication
{
    private const PATH = 'src';

    /**
     * Return custom application path
     * @param string $path
     * @return string
     */
    public function path($path = ''): string
    {
        return $this->basePath . DIRECTORY_SEPARATOR . self::PATH . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
