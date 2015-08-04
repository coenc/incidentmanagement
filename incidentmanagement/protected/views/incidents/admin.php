<?php
/* @var $this IncidentsController */
/* @var $model Incidents */

$this->breadcrumbs=array(
	'Incidenten'=>array('index'),
	'beheer',
);

$this->menu=array(
	array('label'=>'List Incidents', 'url'=>array('index')),
	array('label'=>'Nieuw incident', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#incidents-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Beheer incidenten</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Uitgebreid zoeken','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'incidents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'project_id',
		//array(
		//	'name'=>'project_id',
		//	'htmlOptions'=>array('width'=>'40'),
		//),	
		//array(
		//	'name'=>'user_id',
		//	'htmlOptions'=>array('width'=>'100'),
		//),

		array( 
			'name'=>'project_id',
			'value'=>'$data->project->project_name',
			),
		array( 
			'name'=>'user_id',
			'value'=>'$data->user->user_name',
			),		
		array( 
			'name'=>'status_id',
			'value'=>'$data->status->status_description',
		),		
		array( 
			'name'=>'category_id',
			'value'=>'$data->category->category_description',
		),		
		array( 
			'name'=>'priority_id',
			'value'=>'$data->priority->priority_description',
		),	
		array(
			'name'=>'aanmelder_id',
			'htmlOptions'=>array('width'=>'40'),
		),		
		array(
			'name'=>'submit_date',
			'htmlOptions'=>array('width'=>'120'),
		),	
		'title',
		//'subtitle',
		//'description',
		//'resolution',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
