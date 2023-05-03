<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "product_detail_variant".
 *
 * @property integer $id
 * @property integer $product_detail_id
 * @property integer $product_variant_id
 *
 * @property \app\models\ProductVariant $productVariant
 * @property \app\models\ProductDetail $productDetail
 * @property string $aliasModel
 */
abstract class ProductDetailVariant extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_detail_variant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_detail_id', 'product_variant_id'], 'required'],
            [['product_detail_id', 'product_variant_id'], 'integer'],
            [['product_variant_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\ProductVariant::className(), 'targetAttribute' => ['product_variant_id' => 'id']],
            [['product_detail_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\ProductDetail::className(), 'targetAttribute' => ['product_detail_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_detail_id' => 'Product Detail ID',
            'product_variant_id' => 'Product Variant ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductVariant()
    {
        return $this->hasOne(\app\models\ProductVariant::className(), ['id' => 'product_variant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductDetail()
    {
        return $this->hasOne(\app\models\ProductDetail::className(), ['id' => 'product_detail_id']);
    }




}