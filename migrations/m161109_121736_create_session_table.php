<?php

use yii\db\Migration;

/**
 * Handles the creation of table `session`.
 */
class m161109_121736_create_session_table extends Migration
{

    public function up()
    {
        switch ($this->db->driverName) {
            case 'mysql':
            case 'mariadb':
                $dataType = 'LONGBLOB';
                break;
            case 'pgsql':
                $dataType = 'BYTEA';
                break;
            default:
                $dataType = 'TEXT';
        }

        $this->createTable('{{%session}}', [
            'id' => $this->char(40)->notNull(),
            'expire' => $this->integer(),
            'data' => $dataType,
            'user_id' => $this->integer()
        ]);

        $this->addPrimaryKey('session_pk', 'session', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%session}}');
    }
}
