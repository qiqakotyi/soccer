<?php
/* @var $this LeaguesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leagues',
);

$this->menu=array(
	array('label'=>'Create Leagues', 'url'=>array('create')),
	array('label'=>'Manage Leagues', 'url'=>array('admin')),
);
?>

<h1>Leagues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
