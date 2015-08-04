<?php
/* @var $this StatusesController */
/* @var $data Statuses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_description')); ?>:</b>
	<?php echo CHtml::encode($data->status_description); ?>
	<br />


</div>