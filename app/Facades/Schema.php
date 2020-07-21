<?php
declare(strict_types=1);

namespace App\Facades;

use App\Classes\Database\Blueprint;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\Schema as BaseSchema;

class Schema extends BaseSchema
{
    /**
     * Get a schema builder instance for a connection.
     *
     * @param string|null $name
     *
     * @return Builder
     */
    public static function connection($name): Builder
    {
        $builder = static::$app['db']->connection($name)->getSchemaBuilder();
        $builder->blueprintResolver(static function ($table, $callback) {
            return new Blueprint($table, $callback);
        });
        return $builder;
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @return Builder
     */
    protected static function getFacadeAccessor(): Builder
    {
        $builder = static::$app['db']->connection()->getSchemaBuilder();
        $builder->blueprintResolver(static function ($table, $callback) {
            return new Blueprint($table, $callback);
        });

        return $builder;
    }
}
