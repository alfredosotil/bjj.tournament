<?php

use yii\db\Schema;

class m180401_034338_create_table_brackets extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('brackets', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(45),
            'content' => $this->string(2000),
            'is_active' => $this->smallInteger(1),
            'created_at' => $this->string(255),
            'updated_at' => $this->string(255),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'registered_categories_id' => $this->integer(11)->notNull(),
            'FOREIGN KEY ([[registered_categories_id]]) REFERENCES registered_categories ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('brackets');
    }
}
