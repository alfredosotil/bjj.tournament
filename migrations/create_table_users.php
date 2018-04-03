<?php

use yii\db\Schema;

class m180401_033307_create_table_users extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('users', [
            'id' => $this->integer(11)->notNull(),
            
            'uuid' => $this->string(45),
            'name' => $this->string(45),
            'last_name' => $this->string(45),
            'email' => $this->string(255),
            'phone_number' => $this->string(45),
            'birthday' => $this->datetime(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'is_active' => $this->smallInteger(1),
            'total_points' => $this->integer(11),
            'deleted_at' => $this->timestamp(),
            'deleted_by' => $this->timestamp(),
            
            'username' => $this->string(255),
            'auth_key' => $this->string(32),
            'pasword_hash' => $this->string(255),
            'pasword_reset_token' => $this->string(255),
            'status' => $this->smallInteger(6),
            'last_login' => $this->integer(11),
            'PRIMARY KEY ([[id]])',
            ], $tableOptions);
                
    }

    public function safeDown()
    {
        $this->dropTable('users');
    }
}
