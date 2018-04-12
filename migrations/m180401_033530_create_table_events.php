<?php

use yii\db\Schema;

class m180401_033530_create_table_events extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(45),
            'name' => $this->string(45),
            'address' => $this->string(100),
            'start_at' => $this->string(255),
            'end_at' => $this->string(255),
            'created_at' => $this->string(255),
            'updated_at' => $this->string(255),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'is_active' => $this->smallInteger(1),
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('events');
    }
}
