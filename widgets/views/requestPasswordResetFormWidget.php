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

//$this->title = Yii::t('yii2mod.user', 'Recover Password');
//$this->params['breadcrumbs'][] = $this->title;

?>
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo Html::encode(Yii::t('yii2mod.user', 'Recupera tu contraseña')); ?></h1>
                        <p><?php echo Yii::t('yii2mod.user', 'Por favor coloca tu correo electrónico. Se te enviará un enlace para cambiar tu contraseña.'); ?></p>
                        <?php
                        $form = ActiveForm::begin([
                                'id' => 'modal-request-password-reset-form',
                                'enableAjaxValidation' => true,
                                'method' => 'post',
                                'action' => ['site/requestpasswordreset'],
                        ]);

                        ?>
                        <?php echo $form->field($model, 'email', ['inputOptions' => ['placeholder' => Yii::t('yii2mod.user', 'Tu correo'), 'class' => 'form-control c-square c-theme input-lg']])->label('Correo'); ?>
                        <div class="form-group">
                            <?php echo Html::submitButton(Yii::t('yii2mod.user', 'Enviar'), ['class' => 'btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login', 'name' => 'login-button']); ?>
                            <a href="#" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal"><?php echo Yii::t('yii2mod.user', 'Vuelve al inicio de sesión'); ?></a>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer c-no-border">                
                <span class="c-text-account">No tienes cuenta aún?</span>
                <a href="#" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Registrate!</a>
            </div>
        </div>
    </div>
</div><!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
