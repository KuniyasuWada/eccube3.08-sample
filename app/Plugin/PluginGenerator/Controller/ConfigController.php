<?php

/*
 * This file is part of the PluginGenerator
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\PluginGenerator\Controller;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\Plugin;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;


class ConfigController
{

    /**
     * プラグインジェネレータ用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $form = $app['form.factory']->createBuilder('plugingenerator_config')->getForm();

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();

                $code =$data['code'];

                $Plugin = $app['eccube.repository.plugin']->findOneBy(array('code' => $code));
                if ($Plugin) {
                    $app->addError('admin.plugin_generator.save.error', 'admin');
                    return $app->render('PluginGenerator/Resource/template/admin/config.twig', array(
                        'form' => $form->createView(),
                    ));
                }

                // config.ymlを作成
                $config = array();
                $config['name'] = $data['name'];
                $config['code'] = $code;
                $config['version'] = $data['version'];
                $config['event'] = $code . 'Event';
                $config['service'] = array($code . 'ServiceProvider');

                $codePath = $app['config']['root_dir'] . '/app/Plugin/' . $code;

                $file = new Filesystem();
                $file->mkdir($codePath);

                file_put_contents($codePath . '/config.yml', Yaml::dump($config));

                $author = $data['author'];
                $year = date('Y');

                // PluginManager
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/PluginManager.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                file_put_contents($codePath . '/PluginManager.php', $pluginFileAfter);

                // ServiceProvider
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/ServiceProvider.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                $file->mkdir($codePath . '/ServiceProvider');

                file_put_contents($codePath . '/ServiceProvider/' . $code . 'ServiceProvider.php', $pluginFileAfter);

                // ConfigController
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/ConfigController.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                $file->mkdir($codePath . '/Controller');

                file_put_contents($codePath . '/Controller/ConfigController.php', $pluginFileAfter);

                // Controller
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/Controller.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                file_put_contents($codePath . '/Controller/' . $code . 'Controller.php', $pluginFileAfter);

                // Event
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/Event.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                file_put_contents($codePath . '/' . $code . 'Event.php', $pluginFileAfter);

                // Form
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/ConfigType.php');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);
                $from = '/\[author\]/';
                $pluginFileAfter = preg_replace($from, $author, $pluginFileAfter);
                $from = '/\[year\]/';
                $pluginFileAfter = preg_replace($from, $year, $pluginFileAfter);

                $file->mkdir($codePath . '/Form/Type');

                file_put_contents($codePath . '/Form/Type/' . $code . 'ConfigType.php', $pluginFileAfter);

                // Twig
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/config.twig');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);

                $file->mkdir($codePath . '/Resource/template/admin');

                file_put_contents($codePath . '/Resource/template/admin/config.twig', $pluginFileAfter);

                // index.twig
                $pluginFileBefore = file_get_contents(__DIR__ . '/../Resource/assets/index.twig');
                $from = '/\[code\]/';
                $pluginFileAfter = preg_replace($from, $code, $pluginFileBefore);

                $file->mkdir($codePath . '/Resource/template/admin');

                file_put_contents($codePath . '/Resource/template/index.twig', $pluginFileAfter);

                // event.yml
                $file->copy(__DIR__ . '/../Resource/assets/event.yml', $codePath . '/event.yml');

                // LICENSE
                $file->copy(__DIR__ . '/../Resource/assets/LICENSE', $codePath . '/LICENSE');

                // DB登録
                $Plugin = new Plugin();
                $Plugin->setName($config['name']);
                $Plugin->setCode($code);
                $Plugin->setClassName('');
                $Plugin->setVersion($config['version']);
                $Plugin->setEnable(Constant::DISABLED);
                $Plugin->setSource(0);
                $Plugin->setDelFlg(Constant::DISABLED);

                $app['orm.em']->persist($Plugin);
                $app['orm.em']->flush($Plugin);

                $app->addSuccess('admin.plugin_generator.save.complete', 'admin');

            }

        }

        return $app->render('PluginGenerator/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
