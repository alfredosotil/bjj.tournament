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
use app\models\forms\card;

class CulqiFormWidget extends Widget
{

    public $model;
    
    public function init()
    {
        parent::init();
        if (is_null($this->model)) {
            $this->model = new card();
        }
    }

    public function run()
    {
        if ($this->model instanceof card) {
            return $this->render('culqiFormWidget', [
                    'model' => $this->model,
            ]);
        } else {
            return;
        }
    }
}
