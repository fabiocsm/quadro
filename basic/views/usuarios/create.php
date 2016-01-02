<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = 'Criar Usuários';
$this->params['breadcrumbs'][] = ['label' => 'Usuários', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$model->scenario = 'create'
?>
<div class="usuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
