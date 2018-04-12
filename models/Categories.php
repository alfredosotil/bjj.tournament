<?php

namespace app\models;

use Yii;
use \app\models\base\Categories as BaseCategories;

/**
 * This is the model class for table "categories".
 */
class Categories extends BaseCategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['code'], 'integer'],
            [['name', 'description'], 'string', 'max' => 45]
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'code' => Yii::t('app', 'Code'),
        ];
    }
}
