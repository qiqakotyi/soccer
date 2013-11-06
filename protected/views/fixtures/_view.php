<?php
/* @var $this FixturesController */
/* @var $data Fixtures */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fix_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fix_id), array('view', 'id'=>$data->fix_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('league_id')); ?>:</b>
	<?php echo CHtml::encode($data->league_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home')); ?>:</b>
	<?php echo CHtml::encode($data->home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('away')); ?>:</b>
	<?php echo CHtml::encode($data->away); ?>
	<br />


</div>