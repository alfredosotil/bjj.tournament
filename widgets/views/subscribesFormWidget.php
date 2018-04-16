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

?>
<?php
$form = ActiveForm::begin([
        'id' => 'subscriber-form-main',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
//                        'method' => 'post',
//            'action' => ['site/registersubscriber'],
        'fieldConfig' => [
            'options' => [
                'tag' => false,
            ],
        ],
//            'layout' => 'horizontal',
        'options' => ['onsubmit' => 'return false;']
//                        'validateOnSubmit' => false,
    ]);

?>  
<div class="input-group input-group-lg c-square">
    <?php echo $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'form-control c-square c-font-grey-3 c-border-grey c-theme input-lg', 'placeholder' => Yii::t('app', 'Tu Correo electrónico')])->label(false) ?>
    <span class="input-group-btn">
        <?php
        \demogorgorn\ajax\AjaxSubmitButton::begin([
            'encodeLabel' => false,
            'tagName' => 'a',
            'label' => 'Subscribir  <i class="fa fa-angle-right"></i>',
            'ajaxOptions' => [
                'type' => 'POST',
                'url' => yii\helpers\Url::toRoute(['site/subscriber']),
                'data' => new \yii\web\JsExpression('
                            $("#subscriber-form-main").serialize()
                    '),
                'beforeSend' => new \yii\web\JsExpression('
                            function(xhr){
                            }
                    '),
                'success' => new \yii\web\JsExpression('
                            function(data){
                                console.log(data);
                                    $("#subscriber-form-main").data("yiiActiveForm").submitting = true;
                                    $("#subscriber-form-main").yiiActiveForm("validate");
                                    if(!data.hasError){
                                        swal({
                                            title: "Excelente",
                                            text: "Ya estas subscrito!",
                                            type: "success",
                                            confirmButtonText: "Continuar",
                                            allowOutsideClick: false,
                                        });
                                    }else{
                                        swal({
                                            title: "Upsss",
                                            text: data.errors.email,
                                            type: "error",
                                            confirmButtonText: "Continuar",
                                            allowOutsideClick: false,
                                        });
                                    }
                                return false;
                            }
                    '),
            ],
            'options' => ['class' => 'btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16'],
        ]);
        \demogorgorn\ajax\AjaxSubmitButton::end();

        ?>
    </span>
</div>
<?php ActiveForm::end(); ?>
