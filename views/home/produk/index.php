<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\models\search\ProdukSearch $searchModel
*/

$this->title = 'Produk';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('<i class="fa fa-plus"></i> Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
</p>


    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <div class="box box-info">
        <div class="box-body">
            <div class="table-responsive">
                <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager'        => [
                'class'          => yii\widgets\LinkPager::className(),
                'firstPageLabel' => 'First',
                'lastPageLabel'  => 'Last'                ],
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
                'headerRowOptions' => ['class'=>'x'],
                'columns' => [

                \app\components\ActionButton::getButtons(),

            [
                'attribute' => 'nama',
                'filter' => false,
            ],
            [
                'attribute' => 'harga',
                'label' => 'Harga',
                'format' => 'raw',
                'filter' => false,
                'value' => function ($model) {
        
                    return \app\components\Angka::toReadableHarga($model->harga);
                },
            ],
            [
                'attribute' => 'stok',
                'filter' => false,
            ],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'kategori_produk_id',
    'filter' => false,
    'value' => function ($model) {
        if ($rel = $model->kategoriProduk) {
            return Html::a($rel->id, ['kategori-produk/view', 'id' => $rel->id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'toko_id',
    'value' => function ($model) {
        if ($rel = $model->toko) {
            return Html::a($rel->id, ['toko/view', 'id' => $rel->id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
			'deskripsi_singkat:ntext',
			'deksripsi_lengkap:ntext',
			/*'status_online'*/
			/*'flag'*/
			/*'diskon_status'*/
			/*'diskon'*/
			/*'created_at'*/
			/*'foto_banner'*/
                ],
                ]); ?>
            </div>
        </div>
    </div>

    <?php \yii\widgets\Pjax::end() ?>

