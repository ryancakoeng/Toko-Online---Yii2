<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori')->dropDownList(['1' => 'Fashion', '2' => 'Elektronika', '3' => 'Alat Tulis Kerja', '4' => 'Makanan dan Minuman']); ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_produk')->textarea(['rows' => 5]) ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'status_barang')->dropDownList([ 'NEW' => 'NEW', 'SECOND' => 'SECOND', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'file')->fileinput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
