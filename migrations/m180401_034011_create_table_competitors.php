<?php

use yii\db\Schema;

class m180401_034011_create_table_competitors extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('competitors', [
            'id' => $this->integer(11)->notNull(),
            'uuid' => $this->string(45),
            'weight' => $this->double(),
            'belt' => $this->string(45),
            'teams_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'events_id' => $this->integer(11)->notNull(),
            'categories_id' => $this->integer(11)->notNull(),
            'PRIMARY KEY ([[id]], [[teams_id]], [[user_id]], [[events_id]], [[categories_id]])',
            'FOREIGN KEY ([[categories_id]]) REFERENCES categories ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[events_id]]) REFERENCES events ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[teams_id]]) REFERENCES teams ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[user_id]]) REFERENCES user ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('competitors');
    }
}
