<?php
/* @var $this LeaguesController */
/* @var $model Leagues */

$this->breadcrumbs=array(
	'Leagues'=>array('index'),
	$model->league_id,
);

$this->menu=array(
	array('label'=>'List Leagues', 'url'=>array('index')),
	array('label'=>'Create Leagues', 'url'=>array('create')),
	array('label'=>'Update Leagues', 'url'=>array('update', 'id'=>$model->league_id)),
	array('label'=>'Delete Leagues', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->league_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Leagues', 'url'=>array('admin')),
);
?>

<h1>View Leagues #<?php echo $model->league_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'league_id',
		'league_name',
		'fixtures_url',
		'results_url',
		'teams_url',
	),
)); ?>
