<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Actividad;

/**
 * ActividadSearch represents the model behind the search form about `backend\models\Actividad`.
 */
class ActividadSearch extends Actividad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idactividad', 'idempleado'], 'integer'],
            [['fecha_registro', 'comentarios', 'estado_actividad'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Actividad::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idactividad' => $this->idactividad,
            'idempleado' => $this->idempleado,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'comentarios', $this->comentarios])
            ->andFilterWhere(['like', 'estado_actividad', $this->estado_actividad]);

        return $dataProvider;
    }
}
