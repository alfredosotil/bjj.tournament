<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class StaffFixture extends ActiveFixture
{
    /**
     * @var string
     */
    public $dataFile = '@tests/_data/staff.php';

    /**
     * @var string
     */
    public $modelClass = 'app\models\Staff';
}
