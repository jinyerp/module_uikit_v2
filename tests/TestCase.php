<?php

namespace Jiny\Uikit\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Jiny\Uikit\JinyUikitServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            JinyUikitServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // 테스트 환경 설정
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
