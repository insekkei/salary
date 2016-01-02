<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employer_id), array('view', 'id'=>$data->employer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ic_num')); ?>:</b>
	<?php echo CHtml::encode($data->ic_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locked')); ?>:</b>
	<?php echo CHtml::encode($data->locked); ?>
	<br />


</div>