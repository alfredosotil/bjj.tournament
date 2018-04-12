<?php

use yii\db\Schema;

class m180401_034057_create_table_inscriptions extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('inscriptions', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(45),
            'is_paid' => $this->smallInteger(1),
            'amount' => $this->double(),
            'competitors_id' => $this->integer(11)->notNull(),
            'FOREIGN KEY ([[competitors_id]]) REFERENCES competitors ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('inscriptions');
    }
}
