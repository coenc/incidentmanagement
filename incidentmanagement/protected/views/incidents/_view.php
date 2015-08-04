<?php
/* @var $this IncidentsController */
/* @var $data Incidents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project->project_name); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitle')); ?>:</b>
	<?php echo CHtml::encode($data->subtitle); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resolution')); ?>:</b>
	<?php echo CHtml::encode($data->resolution); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->status_description); ?>
	<br />
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submit_date')); ?>:</b>
	<?php echo CHtml::encode($data->submit_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aanmelder_id')); ?>:</b>
	<?php echo CHtml::encode($data->aanmelder_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('priority_id')); ?>:</b>
	<?php echo CHtml::encode($data->priority->priority_description); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category->category_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->user_name); ?>
	<br />
	
</div>