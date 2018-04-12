<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use mootensai\behaviors\UUIDBehavior as Behavior;
use Yii;

class CustomUUIDBehavior extends Behavior 
{
    /**
     * set beforeSave() -> UUID data
     */
    public function beforeSave() {
        $this->owner->{$this->column} = Yii::$app->db->createCommand("SELECT UUID()")->queryScalar();
    }
}