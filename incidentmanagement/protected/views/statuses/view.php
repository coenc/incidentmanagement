<?php
/* @var $this StatusesController */
/* @var $model Statuses */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Statuses', 'url'=>array('index')),
	array('label'=>'Create Statuses', 'url'=>array('create')),
	array('label'=>'Update Statuses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Statuses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statuses', 'url'=>array('admin')),
);
?>

<h1>View Statuses #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status_description',
	),
)); ?>
