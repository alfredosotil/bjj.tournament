<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginFormWidget
 *
 * @author asotilp
 */
namespace app\widgets;

use Yii;
use yii\base\Widget;
//use app\models\LoginForm;
use app\models\Subscribers;
use yii2mod\user\models\LoginForm;

class SubscribesFormWidget extends Widget
{

    //put your code here
    public function run()
    {
        $model = new Subscribers();
        return $this->render('subscribesFormWidget', [
                'model' => $model,
        ]);
        return;
    }
}
