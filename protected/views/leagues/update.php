<?php
/* @var $this LeaguesController */
/* @var $model Leagues */

$this->breadcrumbs=array(
	'Leagues'=>array('index'),
	$model->league_id=>array('view','id'=>$model->league_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Leagues', 'url'=>array('index')),
	array('label'=>'Create Leagues', 'url'=>array('create')),
	array('label'=>'View Leagues', 'url'=>array('view', 'id'=>$model->league_id)),
	array('label'=>'Manage Leagues', 'url'=>array('admin')),
);
?>

<h1>Update Leagues <?php echo $model->league_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>