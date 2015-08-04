<?php
/* @var $this StatusesController */
/* @var $model Statuses */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statuses', 'url'=>array('index')),
	array('label'=>'Create Statuses', 'url'=>array('create')),
	array('label'=>'View Statuses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>Update Statuses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>