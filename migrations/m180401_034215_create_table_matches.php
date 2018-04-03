<?php

use yii\db\Schema;

class m180401_034215_create_table_matches extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('matches', [
            'id' => $this->integer(11)->notNull(),
            'uuid' => $this->string(45),
            'points_1' => $this->double(),
            'points_2' => $this->double(),
            'competitors_1_id' => $this->integer(11)->notNull(),
            'competitors_2_id' => $this->integer(11)->notNull(),
            'competitors_winner_id' => $this->integer(11)->notNull(),
            'staff_id' => $this->integer(11)->notNull(),
            'PRIMARY KEY ([[id]], [[competitors_1_id]], [[competitors_2_id]], [[competitors_winner_id]], [[staff_id]])',
            'FOREIGN KEY ([[competitors_winner_id]]) REFERENCES competitors ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[staff_id]]) REFERENCES staff ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('matches');
    }
}
