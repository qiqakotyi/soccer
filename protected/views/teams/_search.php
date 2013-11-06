<?php
/* @var $this TeamsController */
/* @var $model Teams */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team_name'); ?>
		<?php echo $form->textField($model,'team_name',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P'); ?>
		<?php echo $form->textField($model,'P'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'W'); ?>
		<?php echo $form->textField($model,'W'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D'); ?>
		<?php echo $form->textField($model,'D'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'L'); ?>
		<?php echo $form->textField($model,'L'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GS'); ?>
		<?php echo $form->textField($model,'GS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GA'); ?>
		<?php echo $form->textField($model,'GA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GD'); ?>
		<?php echo $form->textField($model,'GD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PTS'); ?>
		<?php echo $form->textField($model,'PTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'league_id'); ?>
		<?php echo $form->textField($model,'league_id',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'header'); ?>
		<?php echo $form->textField($model,'header',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_name'); ?>
		<?php echo $form->textField($model,'group_name',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->