<?php
/* @var $this IdController */
/* @var $data Id */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('unused_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->unused_id), array('view', 'id'=>$data->unused_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>