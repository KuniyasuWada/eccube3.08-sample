<?php
/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/12
 * Time: 15:50
 */

namespace Plugin\GiftWrapping;

use Plugin\GiftWrapping\Entity\Wrapping;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class GiftWrappingEvent
{
    /** @var \Eccube\Application $app */
    private $app;

    /**
     * GiftWrappingEvent constructor.
     * @param  \Eccube\Application $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * 購入画面で文字列を表示
     *
     * @param FilterResponseEvent $event
     */
    public function onRenderGiftWrappingShoppingBefore(FilterResponseEvent $event)
    {
        $request = $event->getRequest();
        $response = $event->getResponse();

        /** @var Wrapping $wrapping */
        $wrapping = $this->app['eccube.plugin.repository.wrapping']->find(1);

        if ($wrapping->getIsWrapping()) {
            $html = $this->getHtmlWrapping($request, $response);
            $response->setContent($html);
        }

        $event->setResponse($response);
    }

    /**
     * HTMLの加工
     *
     * @param Request $request
     * @param Response $response
     * @return string
     */
    private function getHtmlWrapping($request, $response)
    {
        $crawler = new Crawler($response->getContent());
        $html = $this->getHtml($crawler);

        /** @var FormFactory $formFactory */
        $formFactory = $this->app['form.factory'];
        $form = $formFactory->createBuilder('shopping')->getForm();

        $parts = $this->app->renderView('GiftWrapping/Resource/template/wrapping_parts.twig', array('form' => $form->createView()));

        try {
            $oldHtml = $crawler->filter('#confirm_main')->last()->html();
            $newHtml = $oldHtml . $parts;
            $html = str_replace($oldHtml, $newHtml, $html);
        } catch (\InvalidArgumentException $e) {
        }

        return $html;
    }

    /**
     * 解析用HTMLを取得
     *
     * @param Crawler $crawler
     * @return string
     */
    private function getHtml(Crawler $crawler)
    {
        $html = '';

        /** @var \DOMElement $domElement */
        foreach ($crawler as $domElement) {
            $domElement->ownerDocument->formatOutput = true;
            $html .= $domElement->ownerDocument->saveHTML();
        }

        return html_entity_decode($html, ENT_NOQUOTES, 'UTF-8');
    }
}