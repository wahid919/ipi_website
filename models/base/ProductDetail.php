<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "product_detail".
 *
 * @property integer $id
 * @property integer $id_product
 * @property integer $stok
 *
 * @property \app\models\Produk $product
 * @property \app\models\ProductDetailVariant[] $productDetailVariants
 * @property \app\models\ProductVariant[] $productVariants
 * @property string $aliasModel
 */
abstract class ProductDetail extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'stok', 'berat', 'harga'], 'required'],
            [['id_product', 'stok', 'berat', 'harga'], 'integer'],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Produk::className(), 'targetAttribute' => ['id_product' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Id Product',
            'stok' => 'Stok',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(\app\models\Produk::className(), ['id' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductDetailVariants()
    {
        return $this->hasMany(\app\models\ProductDetailVariant::className(), ['product_detail_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductVariants()
    {
        return $this->hasMany(\app\models\ProductVariant::className(), ['product_detail_id' => 'id']);
    }
}
