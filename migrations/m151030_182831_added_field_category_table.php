<?php

use yii\db\Schema;
use yii\db\Migration;

class m151030_182831_added_field_category_table extends Migration
{
    const TABLE = '{{%category}}';

    public function up()
    {
        $this->addColumn(self::TABLE, 'basic', Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn(self::TABLE, 'basic');
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
