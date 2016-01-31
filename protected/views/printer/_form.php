<?php
/* @var $this PrinterController */
/* @var $model Printer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'printer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'total_length'); ?>
		<?php echo $form->textField($model,'total_length'); ?>
		<?php echo $form->error($model,'total_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printed'); ?>
		<?php echo $form->textField($model,'printed'); ?>
		<?php echo $form->error($model,'printed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emails'); ?>
		<?php echo $form->textField($model,'emails',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'emails'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : '提交更新'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->