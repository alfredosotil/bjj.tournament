<?php

namespace app\models;

use Yii;
use \app\models\base\Events as BaseEvents;

/**
 * This is the model class for table "events".
 */
class Events extends BaseEvents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id'], 'required'],
            [['id', 'created_by', 'updated_by', 'is_active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['uuid', 'name'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100]
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
            'address' => Yii::t('app', 'Address'),
            'is_active' => Yii::t('app', 'Is Active'),
        ];
    }
}
