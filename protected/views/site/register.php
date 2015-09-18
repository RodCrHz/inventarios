<?php
/* @var $this SiteController */
/* @var $model Usuario */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Registrarse';
$this->breadcrumbs=array(
	'Registrarse',
);
?>

<h1>Registrate</h1>

<?php if (Yii::app()->user->hasFlash('error')): ?>
	<div class="alert alert-danger">
		<?php echo Yii::app()->user->getFlash('error') ?>
	</div>
<?php endif ?>

<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
	<div class="control-group">
		<?php echo $form->labelEx($model,'nick', array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->textField($model,'nick', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nick', array('class'=>'alert alert-danger')); ?></div>
		
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
		<div class="controls">
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password', array('class'=>'alert alert-danger')); ?>
		</div>
		
		
	</div>
	<br>
	<div class="control-group">
		<div class="controls"><?php echo CHtml::submitButton('Guardar', array('class'=>'btn btn-primary')); ?></div>
		
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
