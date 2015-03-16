<?php

use yii\db\Schema;
use yii\db\Migration;

class m150314_141027_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'password', Schema::TYPE_STRING);
    }

    public function down()
    {
        $this->dropColumn('user','password');
    }
}
