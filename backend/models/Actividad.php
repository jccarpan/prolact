<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "actividad".
 *
 * @property integer $idactividad
 * @property integer $idempleado
 * @property string $fecha_registro
 * @property string $comentarios
 * @property string $estado_actividad
 *
 * @property Empleado $idempleado0
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idempleado', 'fecha_registro', 'comentarios', 'estado_actividad'], 'required'],
            [['idempleado'], 'integer'],
            [['fecha_registro'], 'safe'],
            [['comentarios', 'estado_actividad'], 'string', 'max' => 255],
            [['idempleado'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['idempleado' => 'idempleado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idactividad' => Yii::t('app', 'Idactividad'),
            'idempleado' => Yii::t('app', 'Idempleado'),
            'fecha_registro' => Yii::t('app', 'Fecha Registro'),
            'comentarios' => Yii::t('app', 'Comentarios'),
            'estado_actividad' => Yii::t('app', 'Estado Actividad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdempleado0()
    {
        return $this->hasOne(Empleado::className(), ['idempleado' => 'idempleado']);
    }
}
