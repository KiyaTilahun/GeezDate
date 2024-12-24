<?php

namespace GeezDate\GeezDate;

use GeezDate\GeezDate\Commands\GeezDateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GeezDateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('geezdate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_geezdate_table')
            ->hasCommand(GeezDateCommand::class);
    }
}
