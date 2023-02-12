<?php
namespace Traqza\LaravelSetEnvironment;

use Illuminate\Support\ServiceProvider;
use levizoesch\laravelsetenvironment\SetEnvironmentVariable;

class SetEnvironmentVariableServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->commands([
            SetEnvironmentVariable::class
        ]);
    }
}
