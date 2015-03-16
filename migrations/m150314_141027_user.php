<?php

use yii\db\Schema;
use yii\db\Migration;

class m150314_141027_user extends Migration
{
    public function safeUp()
    {
        $this->addColumn('user', 'password', Schema::TYPE_STRING);
    }

    public function safeDown()
    {
        try {
            $this->dropColumn('user','password');
        } catch (Exception $e) {
            echo "(It seems that operation is not supported by the db.)" . PHP_EOL;
            return true;
        }
    }
}
