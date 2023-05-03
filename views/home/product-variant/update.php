<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\ProductVariant $model
*/

$this->title = 'Product Variant ' . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => 'Product Variant', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>

<p>
    <?= Html::a('<i class="fa fa-eye-open"></i> Lihat', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
</p>

<?php echo $this->render('_form', [
'model' => $model,
]); ?>
