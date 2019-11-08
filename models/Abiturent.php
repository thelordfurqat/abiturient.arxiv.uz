<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abiturent".
 *
 * @property int $id
 * @property string $fio
 * @property string $passport
 * @property string $telefon
 * @property string $image
 * @property string $manzil
 * @property string $dtm_varaqi
 * @property int $id_kod
 * @property string $payment_file
 *
 * @property Ariza[] $arizas
 */
class Abiturent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abiturent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio','id_kod','fio', 'passport', 'telefon','manzil'], 'required'],
            [['id_kod'], 'integer'],
            [['fio', 'passport', 'telefon', 'image'], 'string', 'max' => 100],
            [['payment_file','dtm_varaqi'],'file','extensions'=>'png, jpg, bmp, ico'],
            [['manzil'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'passport' => 'Passport',
            'telefon' => 'Telefon',
            'image' => 'Holat',
            'manzil' => 'Manzil',
            'dtm_varaqi' => 'Diplom yoki shaxodatnoma',
            'id_kod' => 'Id Kod',
            'payment_file' => 'Payment File',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAriza()
    {
        return $this->hasOne(Ariza::className(), ['abiturent_id' => 'id']);
    }
}
