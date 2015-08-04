<?php
/* @var $this PrioritiesController */
/* @var $model Priorities */

$this->breadcrumbs=array(
	'Priorities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Priorities', 'url'=>array('index')),
	array('label'=>'Create Priorities', 'url'=>array('create')),
	array('label'=>'Update Priorities', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Priorities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Priorities', 'url'=>array('admin')),
);
?>

<h1>View Priorities #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'priority_description',
	),
)); ?>
