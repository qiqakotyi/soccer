<?php
/* @var $this LiveScoresController */
/* @var $model LiveScores */

$this->breadcrumbs=array(
	'Live Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LiveScores', 'url'=>array('index')),
	array('label'=>'Create LiveScores', 'url'=>array('create')),
	array('label'=>'Update LiveScores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LiveScores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveScores', 'url'=>array('admin')),
);
?>

<h1>View LiveScores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'time',
		'home',
		'score',
		'away',
		'game_time',
		'status',
		'header',
	),
)); ?>
