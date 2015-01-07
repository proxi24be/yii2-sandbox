<?php

use yii\db\Schema;
use yii\db\Migration;

class m150106_095111_table_data extends Migration
{
    public function up()
    {
        $this->batchInsert('organization_type', ['id', 'description'], [['1', 'Department'], ['2', 'Function']]);
        include('migrations/data/organization.php');
        $this->_insertData('organization', $organization);

        include('migrations/data/organization_level.php');
        $this->_insertData('organization_level', $organization_level);

        include('migrations/data/team.php');
        $this->_insertData('team', $team);

        include('migrations/data/team_organization.php');
        $this->_insertData('team_organization', $team_organization);
    }

    public function down()
    {
        return true;
    }

    private function _insertData($table_name, $data)
    {
        if (count ($data) > 0) {
            $keys = array_keys($data[0]);
            $values = [];
            foreach($data as $row) {
                $values[] = array_values($row);
            }
            $this->batchInsert($table_name, $keys, $values);
        }
    }

}
