<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Actividad */

$this->title = Yii::t('app', 'Crear Actividad');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actividades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
