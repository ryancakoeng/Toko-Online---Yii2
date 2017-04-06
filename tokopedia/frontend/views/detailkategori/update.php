<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Detailkategori */

$this->title = 'Update Detailkategori: ' . $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detailkategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailkategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
