<?php

use yii\helpers\Html;
use \dmstr\bootstrap\Tabs;
use yii\bootstrap\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/**
 * @var yii\web\View $this
 * @var app\models\ProductVariant $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<?php DynamicFormWidget::begin([
    'widgetContainer' => 'dynamicform_inner',
    'widgetBody' => '.container-rooms',
    'widgetItem' => '.room-item',
    'limit' => 4,
    'min' => 1,
    'insertButton' => '.add-room',
    'deleteButton' => '.remove-room',
    'model' => $modelsProductVariant[0],
    'formId' => 'dynamic-form',
    'formFields' => [
        'type',
        'value'
    ],
]); ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Type</th>
            <th class="text-center">
                <button type="button" class="add-room btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
            </th>
            <th>Value</th>
            <th class="text-center">
                <button type="button" class="add-room btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
            </th>
        </tr>
    </thead>
    <tbody class="container-rooms">
        <?php foreach ($modelsProductVariant as $indexProductVariant => $modelProductVariant) : ?>
            <tr class="room-item">
                <td class="vcenter">
                    <?php
                    // necessary for update action.
                    if (!$modelProductVariant->isNewRecord) {
                        echo Html::activeHiddenInput($modelProductVariant, "[{$indexProductDetail}][{$indexProductVariant}]id");
                    }
                    ?>
                    <?= $form->field($modelProductVariant, "[{$indexProductDetail}][{$indexProductVariant}]description")->label(false)->textInput(['maxlength' => true]) ?>
                </td>
                <td class="text-center vcenter" style="width: 90px;">
                    <button type="button" class="remove-room btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php DynamicFormWidget::end(); ?>

<!-- <div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin(
            [
                'id' => 'ProductVariant',
                'layout' => 'horizontal',
                'enableClientValidation' => true,
                'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
        );
        ?>
        
			<?= $form->field($model, 'id')->textInput() ?>
			<?= // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
            $form->field($model, 'id_produk')->dropDownList(
                \yii\helpers\ArrayHelper::map(app\models\Produk::find()->all(), 'id', 'id'),
                [
                    'prompt' => 'Select',
                    'disabled' => (isset($relAttributes) && isset($relAttributes['id_produk'])),
                ]
            ); ?>
			<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>        <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
                <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div> -->