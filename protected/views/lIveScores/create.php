<?php
/* @var $this LiveScoresController */
/* @var $model LiveScores */

$this->breadcrumbs=array(
	'Live Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveScores', 'url'=>array('index')),
	array('label'=>'Manage LiveScores', 'url'=>array('admin')),
);
?>

<h1>Create LiveScores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>