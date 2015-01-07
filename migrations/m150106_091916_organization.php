<?php

use yii\db\Schema;
use yii\db\Migration;

class m150106_091916_organization extends Migration
{
    public function up()
    {
        $this->createTable('organization_type', [
            'id' => 'integer',
            'description' => 'string',
            'primary key (id)'
        ]);

        $this->createTable('organization', [
           'id' => 'integer',
            'value' => 'string',
            'code' => 'string(10)',
            'organization_type_id' => 'integer',
            'primary key (id), foreign key (organization_type_id) references organization_type(id)'
        ]);

        $this->createTable('team', [
            'id' => 'integer',
            'firstname' => 'string(128)',
            'lastname' => 'string(128)',
            'email' => 'string',
            'title' => 'string(128)',
            'primary key (id)'
        ]);

        $this->createTable('team_organization', [
            'id' => 'pk',
            'team_id' => 'integer',
            'organization_id' => 'integer',
            'study' => 'string(128)',
            'foreign key (team_id) references team(id), foreign key (organization_id) references organization(id)'
        ]);

        $this->createTable('organization_level', [
            'id' => 'pk',
            'organization_id' => 'integer',
            'organization_parent_id' => 'integer',
            'foreign key (organization_id, organization_parent_id) references organization(id, id)'
        ]);

    }

    public function down()
    {
        $this->dropTable('organization_level');
        $this->dropTable('team_organization');
        $this->dropTable('organization');
        $this->dropTable('organization_type');
        $this->dropTable('team');
    }
}
