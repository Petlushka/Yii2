<?php

use yii\db\Schema;
use yii\db\Migration;

class m151030_183653_fill_table_category_test_data extends Migration
{
    const TABLE = '{{%category}}';
    public function up()
    {
        $this->insert(self::TABLE, [
            'name' => 'Car',
            'basic' => 1,
        ]);

        $this->insert(self::TABLE, [
            'name'=> 'Payment',
            'basic' => 1,
        ]);

        $this->insert(self::TABLE, [
            'name' => 'Food',
            'basic' => 1,
        ]);

    }

    public function down()
    {
        $this->truncateTable(self::TABLE);
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
