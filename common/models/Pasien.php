<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_Pasien
 * @property string|null $nama_pasien
 * @property string|null $jk_pasien
 * @property int|null $umur
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jk_pasien'], 'string'],
            [['umur'], 'integer'],
            [['nama_pasien'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'jk_pasien' => 'Jk Pasien',
            'umur' => 'Umur',
        ];
    }
}
