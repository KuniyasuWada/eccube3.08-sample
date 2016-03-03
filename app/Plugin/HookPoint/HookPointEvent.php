<?php
namespace Plugin\HookPoint;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class HookPointEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function onAppBefore()
    {
        error_log("onAppBefore");
    }

    public function onAppAfter()
    {
        error_log("onAppAfter");
    }

    public function onControllerBefore()
    {
        error_log("onControllerBefore");
    }

    public function onControllerAfter()
    {
        error_log("onControllerAfter");
    }

    public function onControllerFinish()
    {
        error_log("onControllerFinish");
    }

    public function onRenderBefore(FilterResponseEvent $event)
    {
        error_log("onRenderBefore");
    }
}