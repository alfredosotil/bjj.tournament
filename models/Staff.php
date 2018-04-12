<?php

namespace app\models;

use Yii;
use \app\models\base\Staff as BaseStaff;

/**
 * This is the model class for table "staff".
 */
class Staff extends BaseStaff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id'], 'required'],
            [['id', 'total_matches'], 'integer'],
            [['uuid', 'name', 'last_name', 'email', 'phone_number', 'type'], 'string', 'max' => 45]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uuid' => Yii::t('app', 'Uuid'),
            'name' => Yii::t('app', 'Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'total_matches' => Yii::t('app', 'Total Matches'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
