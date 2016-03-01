<?php
/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/12
 * Time: 18:57
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20151126093711 extends AbstractMigration
{
    const NAME = 'plg_gift_wrapping';

    public function up(Schema $schema)
    {
        if ($schema->hasTable(self::NAME)) {
            return true;
        }

        $table = $schema->createTable(self::NAME);
        $table->addColumn('gift_wrapping_id', 'integer', array('unsigned' => true));
        $table->addColumn('user_id', 'text', array('notnull' => false));
        $table->addColumn('user_password', 'text', array('notnull' => false));
        $table->addColumn('is_wrapping', 'boolean', array('notnull' => false));
        $table->setPrimaryKey(array('gift_wrapping_id'));
    }

    public function down(Schema $schema)
    {
        if (!$schema->hasTable(self::NAME)) {
            return true;
        }

        $schema->dropTable(self::NAME);
    }
}