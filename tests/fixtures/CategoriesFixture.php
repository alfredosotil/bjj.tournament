<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class CategoriesFixture extends ActiveFixture
{
    /**
     * @var string
     */
    public $dataFile = '@tests/_data/categories.php';

    /**
     * @var string
     */
    public $modelClass = 'app\models\Categories';
}
