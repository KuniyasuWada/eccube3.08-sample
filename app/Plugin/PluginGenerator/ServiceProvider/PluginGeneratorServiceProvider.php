<?php

/*
 * This file is part of the PluginGenerator
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\PluginGenerator\ServiceProvider;

use Eccube\Application;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\PluginGenerator\Form\Type\PluginGeneratorConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Symfony\Component\Yaml\Yaml;

class PluginGeneratorServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {

        // 管理画面
        $app->match('/' . $app['config']['admin_route'] . '/plugin/plugingenerator/config', 'Plugin\PluginGenerator\Controller\ConfigController::index')->bind('plugin_PluginGenerator_config');

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new PluginGeneratorConfigType($app);
            return $types;
        }));

        // メッセージ登録
        $app['translator'] = $app->share($app->extend('translator', function ($translator, \Silex\Application $app) {
            $translator->addLoader('yaml', new \Symfony\Component\Translation\Loader\YamlFileLoader());
            $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
            if (file_exists($file)) {
                $translator->addResource('yaml', $file, $app['locale']);
            }
            return $translator;
        }));

        // ログファイル設定
        $app['monolog.plugin.generator'] = $app->share(function ($app) {

            $logger = new $app['monolog.logger.class']('plugin.generator.client');

            $file = $app['config']['root_dir'] . '/app/log/plugingenerator.log';
            $RotateHandler = new RotatingFileHandler($file, $app['config']['log']['max_files'], Logger::INFO);
            $RotateHandler->setFilenameFormat(
                'plugingenerator_{date}',
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
