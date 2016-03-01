<?php
/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/13
 * Time: 14:25
 */

namespace Plugin\GiftWrapping\Controller;

use Eccube\Application;
use Plugin\GiftWrapping\Entity\Wrapping;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{
    public function index(Application $app, Request $request)
    {
        /** @var Wrapping $wrapping */
        $wrapping =$app['eccube.plugin.repository.wrapping']->find(1);

        if (!$wrapping) {
            $wrapping = new Wrapping();
        }

        /** @var FormFactory $factory */
        $factory = $app['form.factory'];
        $form = $factory->createBuilder('giftwrapping_config', $wrapping)->getForm();

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {

                $Wrapping = $form->getData();
                // IDは1固定
                $Wrapping->setId(1);

                $app['orm.em']->persist($Wrapping);
                $app['orm.em']->flush();

                $app->addSuccess('admin.gift_wrapping.save.complete', 'admin');
            }

        }

        return $app->render('GiftWrapping/Resource/template/admin/config.twig',
            array('form' => $form->createView()));
    }
}