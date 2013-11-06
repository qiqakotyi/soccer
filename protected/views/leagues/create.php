<?php
/* @var $this LeaguesController */
/* @var $model Leagues */

$this->breadcrumbs=array(
	'Leagues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Leagues', 'url'=>array('index')),
	array('label'=>'Manage Leagues', 'url'=>array('admin')),
);
?>

<h1>Create Leagues</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>