<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "keranjang".
 *
 * @property integer $id
 * @property integer $produk_id
 * @property integer $user_id
 * @property string $variant1
 * @property string $variant2
 * @property string $harga
 * @property integer $jumlah
 * @property integer $id_transaksi
 *
 * @property \app\models\Produk $produk
 * @property \app\models\User $user
 * @property string $aliasModel
 */
abstract class Keranjang extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keranjang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produk_id', 'user_id', 'variant1', 'variant2', 'harga', 'jumlah'], 'required'],
            [['produk_id', 'user_id', 'jumlah', 'id_transaksi'], 'integer'],
            [['variant1', 'variant2', 'harga'], 'string', 'max' => 255],
            [['produk_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\Produk::className(), 'targetAttribute' => ['produk_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\User::className(), 'targetAttribute' => ['user_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'produk_id' => 'Produk ID',
            'user_id' => 'User ID',
            'variant1' => 'Variant1',
            'variant2' => 'Variant2',
            'harga' => 'Harga',
            'jumlah' => 'Jumlah',
            'id_transaksi' => 'Id Transaksi'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(\app\models\Produk::className(), ['id' => 'produk_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\app\models\User::className(), ['id' => 'user_id']);
    }
}