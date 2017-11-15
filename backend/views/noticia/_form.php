<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Fondo;
use himiklab2\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\noticia */
/* @var $form yii\widgets\ActiveForm */
/* @var $model backend\models\Fondo */
/* @var $model app\models\Estadofondo */
?>

<div class="noticia-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'id_fondo')->dropDownList( $var = \yii\helpers\ArrayHelper :: map(fondo :: find()->all(),'id_fondo','nombre_fondo') ,['class'=>'form-control','prompt'=>'Seleccionar']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <?=
            $form->field($model, 'noticia_secundaria')->widget(CKEditor::className(), ['editorOptions' => ['height' => '500px', 'width'=>'70%','toolbarSet'=>'Basic',]]);
            ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
