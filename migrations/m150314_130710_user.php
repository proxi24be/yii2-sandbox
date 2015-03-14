<?php

use yii\db\Schema;
use vendor\myYii\db\Migration;

class m150314_130710_user extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'first_name' => Schema::TYPE_STRING,
            'last_name' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
        ]);

        $this->addTimestamp('user');
    }

    public function down()
    {
        echo "m150314_130710_user cannot be reverted.\n";

        return false;
    }
}
