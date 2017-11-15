<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property integer $id_noticia
 * @property integer $id
 * @property string $noticia_principal
 * @property string $noticia_secundaria
 * @property string $noticia_terciaria
 *
 * @property User $id0
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['id_fondo'], 'required'],
            [['noticia_principal', 'noticia_secundaria', 'noticia_terciaria'], 'string'],
            [['noticia_secundaria'],'required'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
            [['id_fondo'], 'exist', 'skipOnError' => true, 'targetClass' => Fondo::className(), 'targetAttribute' => ['id_fondo' => 'id_fondo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_noticia' => 'Id Noticia',
            'id' => 'ID',
            'noticia_principal' => 'Página principal:',
            'noticia_secundaria' => 'Página de bases:',
            'noticia_terciaria' => 'Página de preguntas frecuentes:',
            'id_fondo' => 'Nombre de Fondo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
    public function getFondo()
    {
        return $this->hasOne(Fondo::className(), ['id_fondo' => 'id_fondo']);
    }


}
