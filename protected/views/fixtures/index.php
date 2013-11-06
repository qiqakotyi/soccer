<?php
/* @var $this FixturesController */
/* @var $dataProvider CActiveDataProvider */

//$date= date('y/m/d');

//Yii::app()->getController()->getAction()->redirect(array('fixtures/'.$date));
//Yii::app()->getController()->getAction('Index');

$this->breadcrumbs=array(
	'Fixtures',
);

$this->menu=array(
	array('label'=>'Create Fixtures', 'url'=>array('create')),
	array('label'=>'Manage Fixtures', 'url'=>array('admin')),
);
?>

<h1>Fixtures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
