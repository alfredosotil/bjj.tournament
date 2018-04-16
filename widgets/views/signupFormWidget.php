<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

//$this->title = Yii::t('yii2mod.user', 'Login');
//$this->params['breadcrumbs'][] = $this->title;

?>

<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="c-font-24 c-font-sbold"><?php echo Yii::t('yii2mod.user', 'Crea una cuenta!'); ?></h3>
                        <p><?php echo Yii::t('yii2mod.user', 'Por favor llena el formulario para crear una cuenta con nosotros'); ?></p>
                        <?php
                        $form = ActiveForm::begin([
                                'id' => 'modal-signup-form',
                                'enableAjaxValidation' => true,
                                'method' => 'post',
                                'action' => ['site/signup'],
                        ]);

                        ?>
                        <?php echo $form->field($model, 'username', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Tu usuario'), 'class' => 'form-control c-square c-theme input-lg']])->label('Usuario') ?>
                        <?php echo $form->field($model, 'email', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Tu correo'), 'class' => 'form-control c-square c-theme input-lg']])->label('Correo') ?>
                        <?php echo $form->field($model, 'password', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Tu contraseña'), 'class' => 'form-control c-square c-theme input-lg']])->passwordInput()->label('Contraseña') ?>
                        <div class="form-group">
                            <?php echo Html::submitButton(Yii::t('yii2mod.user', 'Registrate'), ['class' => 'btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login', 'name' => 'signup-button']) ?>
                            <a href="#" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Volver al inicio de sesión</a>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/SIGNUP-FORM -->
