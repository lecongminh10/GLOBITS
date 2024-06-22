<?php

namespace App\Providers;
use App\View\Components\Molecules\Table;
use App\View\Components\Atoms\TableHead;
use App\View\Components\Atoms\Tbody;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('molecules.table', Table::class);
        Blade::component('atoms.table-head', TableHead::class);
        Blade::component('atoms.tbody', Tbody::class);
    }
}
