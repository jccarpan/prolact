<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property integer $idempleado
 * @property string $nombre
 * @property string $cargo
 * @property string $email
 * @property string $estado
 *
 * @property Actividad[] $actividads
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'cargo', 'email', 'estado'], 'required'],
            [['nombre', 'cargo', 'email', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idempleado' => Yii::t('app', 'Idempleado'),
            'nombre' => Yii::t('app', 'Nombre'),
            'cargo' => Yii::t('app', 'Cargo'),
            'email' => Yii::t('app', 'Email'),
            'estado' => Yii::t('app', 'Estado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['idempleado' => 'idempleado']);
    }
}
