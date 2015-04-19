<?php

use Illuminate\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;

return array(
    'name'         => 'Extensions',
    'slug'         => 'laradic-admin/extensions',
    'dependencies' => [
        'laradic/packadic',
        'laradic/admin'
    ],
    'register'     => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('LaradicAdmin\Extensions\ExtensionsServiceProvider');
    },
    'boot'         => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
    'install'      => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
    'uninstall'    => function (Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    }
);
