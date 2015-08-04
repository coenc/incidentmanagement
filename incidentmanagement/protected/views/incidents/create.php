<?php
/* @var $this IncidentsController */
/* @var $model Incidents */

$this->breadcrumbs=array(
	'Incidenten'=>array('index'),
	'Nieuw incident',
);

$this->menu=array(
	array('label'=>'List Incidenten', 'url'=>array('index')),
	array('label'=>'Beheer incidenten', 'url'=>array('admin')),
);
?>

<h1>Nieuw incident</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>