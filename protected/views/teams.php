<?php
/* @var $this TeamsController */
/* @var $model Teams */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teams-teams-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team_name'); ?>
		<?php echo $form->textField($model,'team_name'); ?>
		<?php echo $form->error($model,'team_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P'); ?>
		<?php echo $form->textField($model,'P'); ?>
		<?php echo $form->error($model,'P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'W'); ?>
		<?php echo $form->textField($model,'W'); ?>
		<?php echo $form->error($model,'W'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'D'); ?>
		<?php echo $form->textField($model,'D'); ?>
		<?php echo $form->error($model,'D'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'L'); ?>
		<?php echo $form->textField($model,'L'); ?>
		<?php echo $form->error($model,'L'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GS'); ?>
		<?php echo $form->textField($model,'GS'); ?>
		<?php echo $form->error($model,'GS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GA'); ?>
		<?php echo $form->textField($model,'GA'); ?>
		<?php echo $form->error($model,'GA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GD'); ?>
		<?php echo $form->textField($model,'GD'); ?>
		<?php echo $form->error($model,'GD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PTS'); ?>
		<?php echo $form->textField($model,'PTS'); ?>
		<?php echo $form->error($model,'PTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'league_id'); ?>
		<?php echo $form->textField($model,'league_id'); ?>
		<?php echo $form->error($model,'league_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'header'); ?>
		<?php echo $form->textField($model,'header'); ?>
		<?php echo $form->error($model,'header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_name'); ?>
		<?php echo $form->textField($model,'group_name'); ?>
		<?php echo $form->error($model,'group_name'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->