<?php

use yii\db\Schema;
use yii\db\Migration;

class m151030_180917_create_table_payment extends Migration
{
    const TABLE = '{{%category}}';

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

    }

    public function down()
    {
        $this->dropTable(self::TABLE);
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
