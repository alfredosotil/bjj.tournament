<?php

use yii\db\Migration;

class m180404_222550_alter_table_user_change_datatype_created_at extends Migration
{

    public function up()
    {
        $this->alterColumn('user', 'created_at', $this->string());
        $this->alterColumn('user', 'updated_at', $this->string());
    }

    public function down()
    {
        $this->alterColumn('user', 'created_at', $this->integer());
        $this->alterColumn('user', 'updated_at', $this->integer());
    }
}
