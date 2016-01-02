<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_id')); ?>:</b>
	<?php echo CHtml::encode($data->employer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_date')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salary_date), array('salary', 'employer_id'=>$data->employer_id, 'salary_date'=>$data->salary_date)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('print_status')); ?>:</b>
	<?php echo CHtml::encode($data->print_status); ?>
	<br />
</div>
