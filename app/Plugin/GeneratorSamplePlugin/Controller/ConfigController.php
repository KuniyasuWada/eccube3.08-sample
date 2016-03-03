<?php

/*
 * This file is part of the GeneratorSamplePlugin
 *
 * Copyright (C) 2016 Kuniyasu.Wada
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GeneratorSamplePlugin\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{

    /**
     * GeneratorSamplePlugin用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $form = $app['form.factory']->createBuilder('GeneratorSamplePlugin_config')->getForm();

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();

                // add code...
            }
        }

        return $app->render('GeneratorSamplePlugin/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
