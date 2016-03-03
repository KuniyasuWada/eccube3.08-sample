<?php

/*
 * This file is part of the GeneratorSamplePlugin
 *
 * Copyright (C) 2016 Kuniyasu.Wada
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GeneratorSamplePlugin\ServiceProvider;

use Eccube\Application;
use Plugin\GeneratorSamplePlugin\Form\Type\GeneratorSamplePluginConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class GeneratorSamplePluginServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        // プラグイン用設定画面
        $app->match('/' . $app['config']['admin_route'] . '/plugin/GeneratorSamplePlugin/config', 'Plugin\GeneratorSamplePlugin\Controller\ConfigController::index')->bind('plugin_GeneratorSamplePlugin_config');

        // 独自コントローラ
        $app->match('/plugin/GeneratorSamplePlugin/hello', 'Plugin\GeneratorSamplePlugin\Controller\GeneratorSamplePluginController::index')->bind('plugin_GeneratorSamplePlugin_hello');

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new GeneratorSamplePluginConfigType($app);
            return $types;
        }));

        // Form Extension

        // Repository

        // Service

        // // メッセージ登録
        // $app['translator'] = $app->share($app->extend('translator', function ($translator, \Silex\Application $app) {
        //     $translator->addLoader('yaml', new \Symfony\Component\Translation\Loader\YamlFileLoader());
        //     $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
        //     if (file_exists($file)) {
        //         $translator->addResource('yaml', $file, $app['locale']);
        //     }
        //     return $translator;
        // }));

        // load config
        // $conf = $app['config'];
        // $app['config'] = $app->share(function () use ($conf) {
        //     $confarray = array();
        //     $path_file = __DIR__ . '/../Resource/config/path.yml';
        //     if (file_exists($path_file)) {
        //         $config_yml = Yaml::parse(file_get_contents($path_file));
        //         if (isset($config_yml)) {
        //             $confarray = array_replace_recursive($confarray, $config_yml);
        //         }
        //     }

        //     $constant_file = __DIR__ . '/../Resource/config/constant.yml';
        //     if (file_exists($constant_file)) {
        //         $config_yml = Yaml::parse(file_get_contents($constant_file));
        //         if (isset($config_yml)) {
        //             $confarray = array_replace_recursive($confarray, $config_yml);
        //         }
        //     }

        //     return array_replace_recursive($conf, $confarray);
        // });

        // ログファイル設定
        $app['monolog.plugin.GeneratorSamplePlugin'] = $app->share(function ($app) {

            $logger = new $app['monolog.logger.class']('plugin.GeneratorSamplePlugin.client');

            $file = $app['config']['root_dir'] . '/app/log/GeneratorSamplePlugin.log';
            $RotateHandler = new RotatingFileHandler($file, $app['config']['log']['max_files'], Logger::INFO);
            $RotateHandler->setFilenameFormat(
                'GeneratorSamplePlugin_{date}',
                'Y-m-d'
            );

            $logger->pushHandler(
                new FingersCrossedHandler(
                    $RotateHandler,
                    new ErrorLevelActivationStrategy(Logger::INFO)
                )
            );

            return $logger;
        });

    }

    public function boot(BaseApplication $app)
    {
    }
}
