<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "jabatan_motivasi".
 *
 * @property integer $id
 * @property integer $nama
 * @property integer $jabatan
 * @property integer $motivasi
 * @property string $aliasModel
 */
abstract class Jabatan_Motivasi extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jabatan_motivasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'jabatan', 'motivasi'], 'required'],
            [['id', 'nama', 'jabatan', 'motivasi'], 'integer']
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
            'jabatan' => 'Jabatan',
            'motivasi' => 'Motivasi',
        ];
    }




}