<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'name') ?>

<div class="form-group">
	<?= Html::submitButton('submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>