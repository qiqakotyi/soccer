<?php
/* @var $this LiveScoresController */
/* @var $model LiveScores */

$this->breadcrumbs=array(
	'Live Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LiveScores', 'url'=>array('index')),
	array('label'=>'Create LiveScores', 'url'=>array('create')),
	array('label'=>'View LiveScores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LiveScores', 'url'=>array('admin')),
);
?>

<h1>Update LiveScores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>