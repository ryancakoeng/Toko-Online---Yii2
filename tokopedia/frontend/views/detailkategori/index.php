<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DetailkategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detailkategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailkategori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detailkategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detail',
            'id_kategori',
            'id_produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
