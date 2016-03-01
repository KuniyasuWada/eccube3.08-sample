<?php

namespace Plugin\GiftWrapping;

use Eccube\Plugin\AbstractPluginManager;
use Plugin\GiftWrapping\Entity\Wrapping;

class PluginManager extends AbstractPluginManager
{

    /**
     * コンストラクタ
     */
    public function __construct()
    {
    }

    /**
     * プラグインインストール時の処理
     *
     * @param $config
     * @param $app
     */
    public function install($config, $app)
    {
    }

    /**
     * プラグイン削除時の処理
     *
     * @param $config
     * @param $app
     */
    public function uninstall($config, $app)
    {
    }

    /**
     * プラグイン有効時の処理
     *
     * @param $config
     * @param $app
     * @throws \Exception
     */
    public function enable($config, $app)
    {
        $this->migrationSchema($app, __DIR__ . '/Resource/doctrine/migration', $config['code']);

        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $app['orm.em'];
        $em->getConnection()->beginTransaction();

        try {
            $wrapping = new Wrapping();
            $wrapping->setId(1);
            $em->persist($wrapping);
            $em->flush($wrapping);
            $em->getConnection()->commit();
        } catch (Exception $e) {
            $em->getConnection()->rollBack();
            throw $e;
        }
    }

    /**
     * プラグイン無効時の処理
     *
     * @param $config
     * @param $app
     */
    public function disable($config, $app)
    {
        $this->migrationSchema($app, __DIR__ . '/Resource/doctrine/migration', $config['code'], 0);
    }

    public function update($config, $app)
    {
    }

}
