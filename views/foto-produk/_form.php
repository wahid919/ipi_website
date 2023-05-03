<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var app\models\FotoProduk $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
        'id' => 'FotoProduk',
        'layout' => 'horizontal',
        'enableClientValidation' => true,
        'errorSummaryCssClass' => 'error-summary alert alert-error'
        ]
        );
        ?>
        
			<?= $form->field($model, 'id')->textInput() ?>
			<?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'produk_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(app\models\Produk::find()->all(), 'id', 'id'),
    [
        'prompt' => 'Select',
        'disabled' => (isset($relAttributes) && isset($relAttributes['produk_id'])),
    ]
); ?>
			<?= $form->field($model, 'flag')->textInput() ?>        <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?=  Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
                <?=  Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>