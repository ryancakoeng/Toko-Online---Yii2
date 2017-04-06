<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Detailkategori */

$this->title = 'Create Detailkategori';
$this->params['breadcrumbs'][] = ['label' => 'Detailkategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailkategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
