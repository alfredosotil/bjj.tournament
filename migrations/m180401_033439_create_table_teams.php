<?php

use yii\db\Schema;

class m180401_033439_create_table_teams extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('teams', [
            'id' => $this->integer(11)->notNull(),
            'uuid' => $this->string(45),
            'name' => $this->string(45),
            'profesor_name' => $this->string(45),
            'email' => $this->string(45),
            'phone_number' => $this->string(45),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'is_active' => $this->smallInteger(1),
            'PRIMARY KEY ([[id]])',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('teams');
    }
}
