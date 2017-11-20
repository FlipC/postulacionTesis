<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use himiklab2\ckeditor\CKEditor;
use kartik\date\DatePicker;
use backend\models\Fondo;
use backend\models\TipoPost;

/* @var $this yii\web\View */
/* @var $model backend\models\post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'titulo_post')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-3">
                <label class="control-label">
                    Fecha Creación
                </label>
                <?= DatePicker::widget([
                    'id' => '1',
                    'name'=> 'Post[fecha_creacion_post]',
                    'value' => date('Y-m-d'),
                    'pluginOptions' => [
                        'format' => 'yyyy-m-d',
                        'autoclose'=>true
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?=
            $form->field($model, 'cuerpo_post')->widget(CKEditor::className(), ['editorOptions' => ['height' => '500px', 'width'=>'70%','toolbarSet'=>'Basic',]]);
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'imagen_Post')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'id_fondo')->dropDownList( $var = \yii\helpers\ArrayHelper :: map(fondo :: find()->all(),'id_fondo','nombre_fondo') ,['class'=>'form-control','prompt'=>'Seleccionar']);?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'id_tipoPost')->dropDownList( $var = \yii\helpers\ArrayHelper :: map(TipoPost :: find()->all(),'id_tipoPost','nombre_tipoPost') ,['class'=>'form-control','prompt'=>'Seleccionar']);?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Crear') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
