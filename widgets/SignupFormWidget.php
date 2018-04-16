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
use yii2mod\user\models\SignupForm;

class SignupFormWidget extends Widget
{

    //put your code here
    public function run()
    {
        if (Yii::$app->user->isGuest) {
            $model = new SignupForm();
            return $this->render('signupFormWidget', [
                    'model' => $model,
            ]);
        } else {
            return;
        }
    }
}
