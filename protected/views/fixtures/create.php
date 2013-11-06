<?php
/* @var $this FixturesController */
/* @var $model Fixtures */

$this->breadcrumbs=array(
	'Fixtures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fixtures', 'url'=>array('index')),
	array('label'=>'Manage Fixtures', 'url'=>array('admin')),
);
?>

<h1>Create Fixtures</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>