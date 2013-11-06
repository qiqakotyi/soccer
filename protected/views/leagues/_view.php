<?php
/* @var $this LeaguesController */
/* @var $data Leagues */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('league_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->league_id), array('view', 'id'=>$data->league_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('league_name')); ?>:</b>
	<?php echo CHtml::encode($data->league_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fixtures_url')); ?>:</b>
	<?php echo CHtml::encode($data->fixtures_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('results_url')); ?>:</b>
	<?php echo CHtml::encode($data->results_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teams_url')); ?>:</b>
	<?php echo CHtml::encode($data->teams_url); ?>
	<br />


</div>