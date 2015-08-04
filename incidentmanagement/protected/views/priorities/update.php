<?php
/* @var $this PrioritiesController */
/* @var $model Priorities */

$this->breadcrumbs=array(
	'Priorities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Priorities', 'url'=>array('index')),
	array('label'=>'Create Priorities', 'url'=>array('create')),
	array('label'=>'View Priorities', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Priorities', 'url'=>array('admin')),
);
?>

<h1>Update Priorities <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>