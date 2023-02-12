# LaravelSetEnvironment
A simple command to set environment variables via command line. I wrote this to assist in pipeline builds.

Composer command
```composer
composer require Traqza/LaravelSetEnvironment
```

To update an existing variable, or set a new variable use the command.

*Note* It is recommended you use all capital letters for the variable name, use _ inconjunction to spaces.

```artisan
php artisan env:set BUILD_ID 1.15.86
```
