<?php

namespace Fourier\SampleLib;

use Illuminate\Support\ServiceProvider;

final class SampleLibServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom('../resources/views', 'awesome-lib'); //viewフォルダを読み込み
    }
}
