<?php

namespace Gelaku\LaravelBackup;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    // 延迟注册
    protected $defer = true;

    /**
     * 注入天气类
     */
    public function register()
    {
        $this->app->singleton(Backup::class, function () {
            return new Backup(config('database.backup'));
        });

        $this->app->alias(Backup::class, 'backup');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Backup::class, 'backup'];
    }
}