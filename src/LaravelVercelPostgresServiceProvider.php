<?php

namespace Braumye\LaravelVercelPostgres;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelVercelPostgresServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-vercel-postgres');
    }

    public function packageRegistered()
    {
        $this->app->bind('db.connector.pgsql', PostgresConnector::class);
    }
}
