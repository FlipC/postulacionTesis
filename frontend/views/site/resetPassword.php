<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

$this->title = 'Restablecer contraseña:';
?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <p>Ingrese su nueva contraseña:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mínimo 6 caracteres alfanuméricos']) ?>
                <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
