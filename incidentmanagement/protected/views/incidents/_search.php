<?php
/* @var $this IncidentsController */
/* @var $model Incidents */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->dropDownList($model,'project_id', CHtml::listData(Projects::model()->findAll(), 'id', 'project_name')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id', CHtml::listData(Categories::model()->findAll(), 'id', 'category_name')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'project_id', CHtml::listData(Statuses::model()->findAll(), 'id', 'status_description')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->dropDownList($model,'user_id', CHtml::listData(Users::model()->findAll(), 'id', 'user_name')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priority_id'); ?>
		<?php echo $form->dropDownList($model,'project_id', CHtml::listData(Priorities::model()->findAll(), 'id', 'priority_description')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'submit_date'); ?>
		<?php echo $form->textField($model,'submit_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitle'); ?>
		<?php echo $form->textField($model,'subtitle',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resolution'); ?>
		<?php echo $form->textField($model,'resolution',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Zoek!'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->