<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    if($mensaje){
        echo HTML::tag('div', HTML::encode($mensaje), ['class' => 'alert alert-danger']);
    }
?>
Hola Usuario

<?php $formulario = ActiveForm::begin(); ?>
<?= $formulario -> field($model, 'valorA') ?>
<?= $formulario -> field($model, 'valorB') ?>

<div class="form-group">
    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>