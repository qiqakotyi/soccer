<?php
/* @var $this LeaguesController */
/* @var $model Leagues */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'league_id'); ?>
		<?php echo $form->textField($model,'league_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'league_name'); ?>
		<?php echo $form->textField($model,'league_name',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fixtures_url'); ?>
		<?php echo $form->textField($model,'fixtures_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'results_url'); ?>
		<?php echo $form->textField($model,'results_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teams_url'); ?>
		<?php echo $form->textField($model,'teams_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->