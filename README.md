# Laravel Scheduler

[![Packagist](https://img.shields.io/packagist/v/tearsilent/laravel-scheduler.svg?style=flat-square)](https://packagist.org/packages/tearsilent/laravel-scheduler) [![Packagist](https://img.shields.io/packagist/dm/tearsilent/laravel-scheduler.svg?style=flat-square)](https://packagist.org/packages/tearsilent/laravel-scheduler) [![Build Status](https://travis-ci.org/tearsilent/laravel-scheduler.svg?branch=master)](https://travis-ci.org/tearsilent/laravel-scheduler) [![StyleCI](https://github.styleci.io/repos/175451731/shield?branch=master)](https://styleci.io/repos/175451731) [![Packagist](https://img.shields.io/packagist/l/tearsilent/laravel-scheduler.svg?style=flat-square)](https://opensource.org/licenses/MIT)



## Installation - Basic
1) Install the package using composer:

```bash
composer require tearsilent/laravel-scheduler
```

2) Run the migration to install the package's table to record visits to by executing:

```bash
php artisan migrate
```


5) Publish the config file, assets, and views by running:

```bash
php artisan vendor:publish
```


Since fetching data from an external API takes time, the operation is queued an performed asynchronously. This is done using Laravel Jobs and probably won't work on a shared hosting. There are multiple drivers supported. We'll describe how to set up the database driver.

First, in your `.env` file you need to set:

```php
QUEUE_DRIVER=database
```
Then run these commands one after another:

```bash
php artisan queue:table
php artisan queue:failed-table
php artisan migrate
```

Finally, you need to start the worker that will take care of the queue. Run the following command and keep it running:

```bash
php artisan queue:work
```

Read more on Queues and Jobs in the [Laravel documentation](https://laravel.com/docs/5.5/queues). [This section](https://laravel.com/docs/5.5/queues#supervisor-configuration) describes how to restart the queue worker automatically in case the process fails.

P.S. You need to restart the worker every time you've made changes to the package's config file.

## License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).