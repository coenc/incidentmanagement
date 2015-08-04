<?php
/* @var $this IncidentsController */
/* @var $model Incidents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incidents-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Velden met <span class="required">*</span> zijn verplicht.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->dropDownList($model,'project_id', CHtml::listData(Projects::model()->findAll(), 'id', 'project_name')); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>
			
	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id', CHtml::listData(Categories::model()->findAll(), 'id', 'category_description')); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id', CHtml::listData(Statuses::model()->findAll(), 'id', 'status_description')); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority_id'); ?>
		<?php echo $form->dropDownList($model,'priority_id', CHtml::listData(Priorities::model()->findAll(), 'id', 'priority_description')); ?>
		<?php echo $form->error($model,'priority_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model,'user_id', CHtml::listData(Users::model()->findAll(), 'id', 'user_name')); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submit_date'); ?>
		<?php echo $form->textField($model,'submit_date'); ?>
		<?php echo $form->error($model,'submit_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle'); ?>
		<?php echo $form->textField($model,'subtitle',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'subtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('style'=>'height:100px','size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resolution'); ?>
		<?php echo $form->textField($model,'resolution',array('style'=>'height:100px','size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'resolution'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aanmaken' : 'Opslaan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->