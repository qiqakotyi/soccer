<?php
/* @var $this FixturesController */
/* @var $model Fixtures */



$this->breadcrumbs=array(
	'Fixtures'=>array('index'),
	$model->fix_id,
);
//echo Yii::app()->createUrl('index',array(date("y/m/d")));

$this->menu=array(
	array('label'=>'List Fixtures', 'url'=>array('index')),
	array('label'=>'Create Fixtures', 'url'=>array('create')),
	array('label'=>'Update Fixtures', 'url'=>array('update', 'id'=>$model->fix_id)),
	array('label'=>'Delete Fixtures', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fix_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fixtures', 'url'=>array('admin')),
);
?>

<h1>View Fixtures #<?php echo $model->fix_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fix_id',
		'league_id',
		'date',
		'time',
		'home',
		'away',
	),
)); ?>
