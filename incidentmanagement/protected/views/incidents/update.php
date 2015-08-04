<?php
/* @var $this IncidentsController */
/* @var $model Incidents */

$this->breadcrumbs=array(
	'Incidenten'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List incidenten', 'url'=>array('index')),
	array('label'=>'Nieuw incident', 'url'=>array('create')),
	array('label'=>'View Incidents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Beheer incidenten', 'url'=>array('admin')),
);
?>

<h1>Bewerk incident <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>