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

$items = Yii::$app->cart->getItems();

?>

<!-- BEGIN: CART MENU -->
<?php if (count($items) > 0): ?>
    <div class="c-cart-menu">
        <div class="c-cart-menu-title">
            <p class="c-cart-menu-float-l c-font-sbold"><?= count(Yii::$app->cart->getItems()) . Yii::t('yii2mod.user', ' item(s)'); ?> </p>
            <p class="c-cart-menu-float-r c-theme-font c-font-sbold"><?= Yii::t('yii2mod.user', ' S/.') . Yii::$app->cart->getAttributeTotal('vat') ?></p>
        </div>
        <ul class="c-cart-menu-items">
            <?php foreach ($items as $value): ?>
                <li>
                    <!--                <div class="c-cart-menu-close">
                                        <a href="#" class="c-theme-link">×</a>
                                    </div>-->
                    <div class="mat-color" style="border:black solid 1px; background-color: <?= $value->product->color ?>;"></div>
                    <div class="c-cart-menu-content">
                        <p><?= $value->qty ?> x <span class="c-item-price c-theme-font"><?= $value->price_per_unit ?></span></p>
                        <p>Total detalle <?= $value->price ?></p>
                        <a href="<?= \yii\helpers\Url::toRoute(['site/productdetail', 'id' => $value->product->id]) ?>" class="c-item-name c-font-sbold"><?= $value->name ?></a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul> 
        <div class="c-cart-menu-footer">
            <a href="<?= \yii\helpers\Url::toRoute(['site/viewcart']) ?>" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">Ver Carrito</a>
            <a href="<?= \yii\helpers\Url::toRoute(['site/checkout']) ?>" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
        </div>
    </div>
<?php endif; ?>
<!-- END: CART MENU -->
