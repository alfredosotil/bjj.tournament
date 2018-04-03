<?php

use yii\db\Migration;

/**
 * Handles adding variables to table `user`.
 */
class m180401_033307_add_variables_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'uuid', $this->string(45));
        $this->addColumn('user', 'name', $this->string(45)->null());
        $this->addColumn('user', 'last_name', $this->string(45)->null());
        $this->addColumn('user', 'phone_number', $this->string(45)->null());
        $this->addColumn('user', 'birthday', $this->datetime()->null());
        $this->addColumn('user', 'is_active', $this->smallInteger(1)->null());
        $this->addColumn('user', 'total_points', $this->integer(11)->null());
        $this->addColumn('user', 'deleted_at', $this->timestamp()->null());
        $this->addColumn('user', 'deleted_by', $this->timestamp()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'uuid');
        $this->dropColumn('user', 'name');
        $this->dropColumn('user', 'last_name');
        $this->dropColumn('user', 'email');
        $this->dropColumn('user', 'phone_number');
        $this->dropColumn('user', 'birthday');
        $this->dropColumn('user', 'created_at');
        $this->dropColumn('user', 'updated_at');
        $this->dropColumn('user', 'is_active');
        $this->dropColumn('user', 'total_points');
        $this->dropColumn('user', 'deleted_at');
        $this->dropColumn('user', 'deleted_by');
    }
}
