<?php
/* @var $this PrioritiesController */
/* @var $model Priorities */

$this->breadcrumbs=array(
	'Priorities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Priorities', 'url'=>array('index')),
	array('label'=>'Manage Priorities', 'url'=>array('admin')),
);
?>

<h1>Create Priorities</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>