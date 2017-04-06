<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_produk') ?>

    <?= $form->field($model, 'nama_produk') ?>

    <?= $form->field($model, 'kategori') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'detail_produk') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'status_barang') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
