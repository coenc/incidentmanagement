<?php
/* @var $this IncidentsController */
/* @var $model Incidents */

$this->breadcrumbs=array(
	'Incidenten'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Incidents', 'url'=>array('index')),
	array('label'=>'Nieuw incident', 'url'=>array('create')),
	array('label'=>'Bewerk incident', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Verwijder incident', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Verwijdern incident. Weet u het zeker?')),
	array('label'=>'Beheer Incidenten', 'url'=>array('admin')),
);
?>

<h1>Details incident #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'project_id',
		array('label'=>'Projectnaam', 'value'=>$model->project->project_name),
		//'user_id',
		array('label'=>'Gebruiker', 'value'=>$model->user->user_name),
		//'status_id',
		array('label'=>'Status', 'value'=>$model->status->status_description),
		//'priority_id',
		array('label'=>'Prioriteit', 'value'=>$model->priority->priority_description),
		'submit_date',
		'title',
		'subtitle',
		'description',
		'resolution',
	),
)); ?>
