<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_produk',
            'nama_produk',
            'kategori',
            'harga',
			'status_barang',
            // 'detail_produk',
            'stock',
			// 'foto',
            
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
