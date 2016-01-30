<?php
/* @var $this PrinterController */
/* @var $data Printer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('unused_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->unused_id), array('view', 'id'=>$data->unused_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_length')); ?>:</b>
	<?php echo CHtml::encode($data->total_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printed')); ?>:</b>
	<?php echo CHtml::encode($data->printed); ?>
	<br />


</div>