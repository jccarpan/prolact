<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empleado */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Empleado',
]) . $model->idempleado;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empleados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idempleado, 'url' => ['view', 'id' => $model->idempleado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
