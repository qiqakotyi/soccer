<?php
/* @var $this LeaguesController */
/* @var $model Leagues */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'leagues-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'league_name'); ?>
		<?php echo $form->textField($model,'league_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'league_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fixtures_url'); ?>
		<?php echo $form->textField($model,'fixtures_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fixtures_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'results_url'); ?>
		<?php echo $form->textField($model,'results_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'results_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teams_url'); ?>
		<?php echo $form->textField($model,'teams_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'teams_url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->