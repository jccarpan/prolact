<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Actividad */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Actividad',
]) . $model->idactividad;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actividades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idactividad, 'url' => ['view', 'id' => $model->idactividad]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
