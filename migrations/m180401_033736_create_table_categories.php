<?php

use yii\db\Schema;

class m180401_033736_create_table_categories extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('categories', [
            'id' => $this->integer(11)->notNull(),
            'name' => $this->string(45),
            'description' => $this->string(45),
            'code' => $this->integer(11),
            'PRIMARY KEY ([[id]])',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('categories');
    }
}
