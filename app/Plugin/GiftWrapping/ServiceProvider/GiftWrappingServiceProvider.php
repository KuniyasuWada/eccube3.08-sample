<?php
/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/12
 * Time: 17:52
 */

namespace Plugin\GiftWrapping\ServiceProvider;

use Plugin\GiftWrapping\Form\Extension\ShoppingTypeExtension;
use Plugin\GiftWrapping\Form\Type\GiftWrappingConfigType;
use Silex\Application;
use Silex\ServiceProviderInterface;

class GiftWrappingServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     */
    public function register(Application $app)
    {
        $app['form.type.extensions'] =
            $app->share($app->extend('form.type.extensions',
                function ($extensions) use ($app) {
                    $extensions[] = new ShoppingTypeExtension($app);
                    return $extensions;
                }));

       $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new GiftWrappingConfigType($app);
            return $types;
        }));

        $app['eccube.plugin.repository.wrapping'] =
            $app->share(function () use ($app) {
                return $app['orm.em']->getRepository('Plugin\GiftWrapping\Entity\Wrapping');
            });

        // プラグイン一覧に設定リンクを追加
        $app->match('/' . $app['config']['admin_route'] . '/plugin/GiftWrapping/config',
            'Plugin\GiftWrapping\Controller\ConfigController::index')
            ->bind('plugin_GiftWrapping_config');

        $app['translator'] = $app->share($app->extend('translator', function ($translator, \Silex\Application $app) {
            $translator->addLoader('yaml', new \Symfony\Component\Translation\Loader\YamlFileLoader());
            $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
            if (file_exists($file)) {
                $translator->addResource('yaml', $file, $app['locale']);
            }
            return $translator;
        }));

        $app['config'] = $app->share($app->extend('config', function ($conf) {
            $addNavi = array(
                'id' => 'gift_wrapping',
                'name' => "ラッピングMenu",
                'has_child' => true,
                'icon' => 'cb-comment',
                'child' => array(
                    array(
                        'id' => "gift_wrapping_edit",
                        'name' => "小メニュー",
                        'has_child' => true,
                        'icon' => 'cb-comment',
                        'child' => array(
                            array(
                                'id' => "gift_wrapping_edit",
                                'name' => "孫メニュー",
                                'url' => "admin_product",
                            ),
                        ),
                    ),
                ),
            );
            $conf['nav'][] = $addNavi;
            return $conf;
        }));

        $app['config'] = $app->share($app->extend('config', function ($config) {
            $config['nav'][5]['child'][] = array(
                'id' => 'order_sample',
                'name' => '【既存MENUへ追加】',
                'url' => 'admin_product',
            );
            return $config;
        }));

    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {
        // do nothing
    }
}