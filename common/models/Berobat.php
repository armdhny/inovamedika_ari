<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "berobat".
 *
 * @property int $id_Berobat
 * @property int|null $id_Pasien
 * @property int|null $id_dokter
 * @property string|null $tgl_berobat
 * @property string $keluhan_pasien
 * @property string $hasil_diagnosa
 * @property string $status_pasien
 */
class Berobat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berobat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pasien', 'id_dokter'], 'integer'],
            [['tgl_berobat'], 'safe'],
            [['keluhan_pasien', 'hasil_diagnosa', 'status_pasien'], 'required'],
            [['status_pasien'], 'string'],
            [['keluhan_pasien', 'hasil_diagnosa'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Berobat' => 'Id Berobat',
            'id_Pasien' => 'Id Pasien',
            'id_dokter' => 'Id Dokter',
            'tgl_berobat' => 'Tgl Berobat',
            'keluhan_pasien' => 'Keluhan Pasien',
            'hasil_diagnosa' => 'Hasil Diagnosa',
            'status_pasien' => 'Status Pasien',
        ];
    }
}
