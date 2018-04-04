<?php

namespace app\models;

//use yii2mod\user\models\UserModel as BaseUserModel;
use app\models\base\User as BaseUser;

/**
 * Class UserModel
 *
 * @package app\models
 */
class User extends BaseUser {

    // custom logic
    public function beforeSave($insert) {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($this->isNewRecord) {
            $this->uuid = new \yii\db\Expression("REPLACE(UUID(),'-','')");
        }

        return true;
    }

}
