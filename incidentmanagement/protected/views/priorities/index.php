<?php
/* @var $this PrioritiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Priorities',
);

$this->menu=array(
	array('label'=>'Create Priorities', 'url'=>array('create')),
	array('label'=>'Manage Priorities', 'url'=>array('admin')),
);
?>

<h1>Priorities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
