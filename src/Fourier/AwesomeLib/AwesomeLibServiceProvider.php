<?php

namespace Fourier\AwesomeLib;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

final class AwesomeLibServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blueprint::macro('timestampsWithDefault', function (
            ?int $precision = 0,
            string $created_at_column = 'created_at',
            string $updated_at_column = 'updated_at',
        ): void {
            /** @var Blueprint $this */
            $this->timestamp($created_at_column, $precision)
                ->useCurrent();

            $this->timestamp($updated_at_column, $precision)
                ->useCurrent()
                ->useCurrentOnUpdate();

            $this->index($created_at_column);
            $this->index($updated_at_column);
        });
    }
}