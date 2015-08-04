<?php
/* @var $this IncidentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Incidenten',
);

$this->menu=array(
	array('label'=>'Nieuw incident', 'url'=>array('create')),
	array('label'=>'Beheer incidenten', 'url'=>array('admin')),
);
?>

<h1>Incidenten</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
