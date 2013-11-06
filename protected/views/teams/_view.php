<?php
/* @var $this TeamsController */
/* @var $data Teams */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team_name')); ?>:</b>
	<?php echo CHtml::encode($data->team_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P')); ?>:</b>
	<?php echo CHtml::encode($data->P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('W')); ?>:</b>
	<?php echo CHtml::encode($data->W); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D')); ?>:</b>
	<?php echo CHtml::encode($data->D); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('L')); ?>:</b>
	<?php echo CHtml::encode($data->L); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GS')); ?>:</b>
	<?php echo CHtml::encode($data->GS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('GA')); ?>:</b>
	<?php echo CHtml::encode($data->GA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GD')); ?>:</b>
	<?php echo CHtml::encode($data->GD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PTS')); ?>:</b>
	<?php echo CHtml::encode($data->PTS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('league_id')); ?>:</b>
	<?php echo CHtml::encode($data->league_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('header')); ?>:</b>
	<?php echo CHtml::encode($data->header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_name); ?>
	<br />

	*/ ?>

</div>