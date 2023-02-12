<?php
namespace Traqza\LaravelSetEnvironment;

use Illuminate\Support\ServiceProvider;
use Traqza\LaravelSetEnvironment\SetEnvironmentVariable;

class SetEnvironmentVariableServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->commands([
            SetEnvironmentVariable::class
        ]);
    }
}
