<?php

namespace Athulyasanthosh\TestCalc;

use Athulyasanthosh\TestCalc\Commands\TestCalcCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestCalcServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('test-calc')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_test-calc_table')
            ->hasCommand(TestCalcCommand::class);
    }
}
