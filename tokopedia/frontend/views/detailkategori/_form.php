<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detailkategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detailkategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kategori')->textInput() ?>

    <?= $form->field($model, 'id_produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
