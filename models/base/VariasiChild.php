<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "variasi_child".
 *
 * @property integer $id
 * @property integer $usrid
 * @property integer $variasi_header_id
 * @property string $nama
 *
 * @property \app\models\User $usr
 * @property \app\models\VariasiHeader $variasiHeader
 * @property string $aliasModel
 */
abstract class VariasiChild extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'variasi_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usrid', 'variasi_header_id', 'nama'], 'required'],
            [['usrid', 'variasi_header_id'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['usrid'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\User::className(), 'targetAttribute' => ['usrid' => 'id']],
            [['variasi_header_id'], 'exist', 'skipOnError' => true, 'targetClass' => \app\models\VariasiHeader::className(), 'targetAttribute' => ['variasi_header_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usrid' => 'Usrid',
            'variasi_header_id' => 'Variasi Header ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsr()
    {
        return $this->hasOne(\app\models\User::className(), ['id' => 'usrid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariasiHeader()
    {
        return $this->hasOne(\app\models\VariasiHeader::className(), ['id' => 'variasi_header_id']);
    }




}
