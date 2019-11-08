<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ariza".
 *
 * @property int $id
 * @property int $abiturent_id
 * @property int $holat
 *
 * @property Abiturent $abiturent
 */
class Ariza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ariza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['abiturent_id'], 'required'],
            [['abiturent_id', 'holat'], 'integer'],
            [['abiturent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Abiturent::className(), 'targetAttribute' => ['abiturent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'abiturent_id' => 'Abiturent ID',
            'holat' => 'Holat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbiturent()
    {
        return $this->hasOne(Abiturent::className(), ['id' => 'abiturent_id']);
    }
    public function holatqu($holat){
        switch ($holat){
            case 1:return 'Ariza ko\'rib chiqish jarayoni';break;
            case 2:return 'Hujjatlar qabul qilingan';break;
            case 3:return 'Hujjatlar rad qilingan';break;
        }
    }
}
