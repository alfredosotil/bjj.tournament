<?php

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class EventsFixture extends ActiveFixture
{
    /**
     * @var string
     */
    public $dataFile = '@tests/_data/events.php';

    /**
     * @var string
     */
    public $modelClass = 'app\models\Events';
}
