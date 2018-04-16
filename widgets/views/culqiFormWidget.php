<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

use yii\helpers\Html;

app\assets\CulqiAsset::register($this);

//$script = <<< JS   
//   
//JS;
//$this->registerJs($script);
?>
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<style type="text/css">
    .cardnumber {
        background-image: url(<?= Yii::$app->request->baseUrl; ?>/img/cards.png);
        background-position: 3px 3px;
        background-size: 40px 252px; /* 89 x 560 */
        background-repeat: no-repeat;
        padding-left: 48px;
    }
</style>
<div class="col-md-6 col-md-offset-6">
    <p class="c-font-30">Datos de Tarjeta</p>
</div>      
<div class="col-md-12 c-font-20">
    <form action="makeorder" method="POST" id="culqi-card-form">
        <div class="form-group">
            <label class="control-label">
                <span>Correo Electrónico</span>
            </label>
            <input class="form-control c-square c-theme" type="text" size="50" data-culqi="card[email]" id="card[email]" name="card[email]" value="<?= $model->email ?>">
        </div>
        <div class="form-group">
            <label class="control-label">
                <span>Número de tarjeta</span>
            </label>
            <input class="form-control c-square c-theme cardnumber" type="text" maxlength="20" size="20" data-stripe="number" data-culqi="card[number]" id="card[number]" name="card[number]" placeholder="1234 5678 9012 3456" value="<?= $model->number ?>">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        <span>Mes</span>
                    </label>
                    <input  class="form-control c-square c-theme" type="text" size="2" data-culqi="card[exp_month]" id="card[exp_month]" name="card[exp_month]" value="<?= $model->exp_month ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        <span>Año</span>
                    </label>
                    <input class="form-control c-square c-theme" type="text" size="4" data-culqi="card[exp_year]" id="card[exp_year]" name="card[exp_year]" value="<?= $model->exp_year ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        <span>CVC</span>
                    </label>
                    <input class="form-control c-square c-theme" type="text" size="4" data-culqi="card[cvv]" id="card[cvv]" name="card[cvv]" value="<?= $model->cvv ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="invoque-culqi ladda-button btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" style="width:100%" data-spinner-color="red" data-style="zoom-in"><span class="ladda-label">Realizar pago  <i class="fa fa-check"></i></span></button>
            </div>
        </div>
    </form>
</div>

<!-- END: CONTENT/USER/LOGIN-FORM -->
