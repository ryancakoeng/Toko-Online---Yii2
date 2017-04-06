<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Produk */

$this->title = $model->nama_produk;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_produk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_produk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_produk',
            'nama_produk',
            'kategori',
            'harga',
            'detail_produk',
            'stock',
            'status_barang',
			[
				'attribute'=>'foto',
				'value'=> \Yii::$app->request->BaseUrl.'/'.$model->foto,
				'format' => ['image',['width'=>'120']],
			]
        ],
    ]) ?>

</div>
