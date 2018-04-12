<?php

use yii\db\Schema;

class m180401_034127_create_table_staff extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('staff', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(45),
            'name' => $this->string(45),
            'last_name' => $this->string(45),
            'email' => $this->string(45),
            'phone_number' => $this->string(45),
            'total_matches' => $this->integer(11),
            'type' => $this->string(45),
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('staff');
    }
}
