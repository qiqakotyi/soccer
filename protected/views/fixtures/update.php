<?php
/* @var $this FixturesController */
/* @var $model Fixtures */

$this->breadcrumbs=array(
	'Fixtures'=>array('index'),
	$model->fix_id=>array('view','id'=>$model->fix_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fixtures', 'url'=>array('index')),
	array('label'=>'Create Fixtures', 'url'=>array('create')),
	array('label'=>'View Fixtures', 'url'=>array('view', 'id'=>$model->fix_id)),
	array('label'=>'Manage Fixtures', 'url'=>array('admin')),
);
?>

<h1>Update Fixtures <?php echo $model->fix_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>