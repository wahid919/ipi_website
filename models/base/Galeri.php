<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "galeri".
 *
 * @property integer $id
 * @property string $nama
 * @property string $foto
 * @property string $isi
 * @property integer $flag
 * @property string $aliasModel
 */
abstract class Galeri extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['isi'], 'string'],
            [['flag'], 'integer'],
            [['nama', 'foto'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'foto' => 'Foto',
            'isi' => 'Isi',
            'flag' => 'Flag',
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'flag' => '0:aktif;1:tidak aktif',
        ]);
    }




}