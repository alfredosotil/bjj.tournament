<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class TeamsFixture extends ActiveFixture
{
    /**
     * @var string
     */
    public $dataFile = '@tests/_data/teams.php';

    /**
     * @var string
     */
    public $modelClass = 'app\models\Teams';
}
