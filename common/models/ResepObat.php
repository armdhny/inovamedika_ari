<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resepobat".
 *
 * @property int $id_ResepObat
 * @property int|null $id_obat
 * @property int|null $id_Berobat
 */
class ResepObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resepobat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_obat', 'id_Berobat'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ResepObat' => 'Id Resep Obat',
            'id_obat' => 'Id Obat',
            'id_Berobat' => 'Id Berobat',
        ];
    }
}
