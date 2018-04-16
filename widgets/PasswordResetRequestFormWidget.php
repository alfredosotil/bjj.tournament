<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RequestPasswordResetFormWidget
 *
 * @author asotilp
 */
namespace app\widgets;

use Yii;
use yii\base\Widget;
//use app\models\RequestPasswordResetForm;
use yii2mod\user\models\PasswordResetRequestForm;

class PasswordResetRequestFormWidget extends Widget
{

    //put your code here
    public function run()
    {
        if (Yii::$app->user->isGuest) {
            $model = new PasswordResetRequestForm();
            return $this->render('requestPasswordResetFormWidget', [
                    'model' => $model,
            ]);
        } else {
            return;
        }
    }
}
