<?php

use yii\db\Schema;

class m180401_034308_create_table_registered_categories extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('registered_categories', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(45),
            'weight' => $this->double(),
            'belt' => $this->string(45),
            'events_id' => $this->integer(11)->notNull(),
            'categories_id' => $this->integer(11)->notNull(),
            'FOREIGN KEY ([[categories_id]]) REFERENCES categories ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[events_id]]) REFERENCES events ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('registered_categories');
    }
}
