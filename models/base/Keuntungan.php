<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "keuntungan".
 *
 * @property integer $id
 * @property string $icon
 * @property string $nama
 * @property string $isi
 * @property string $aliasModel
 */
abstract class Keuntungan extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keuntungan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'nama', 'isi'], 'required'],
            [['isi'], 'string'],
            [['icon', 'nama'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => 'Icon',
            'nama' => 'Nama',
            'isi' => 'Isi',
        ];
    }




}
