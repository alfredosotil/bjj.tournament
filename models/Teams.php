<?php

namespace app\models;

use Yii;
use \app\models\base\Teams as BaseTeams;

/**
 * This is the model class for table "teams".
 */
class Teams extends BaseTeams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'is_active'], 'integer'],
            [['uuid', 'name', 'profesor_name', 'email', 'phone_number'], 'string', 'max' => 45]
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
            'profesor_name' => Yii::t('app', 'Profesor Name'),
            'email' => Yii::t('app', 'Email'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'is_active' => Yii::t('app', 'Is Active'),
        ];
    }
}
