<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employer_id), array('view', 'id'=>$data->employer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_date')); ?>:</b>
	<?php echo CHtml::encode($data->salary_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('print_status')); ?>:</b>
	<?php echo CHtml::encode($data->print_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_salary')); ?>:</b>
	<?php echo CHtml::encode($data->total_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_pay')); ?>:</b>
	<?php echo CHtml::encode($data->total_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic_salary')); ?>:</b>
	<?php echo CHtml::encode($data->basic_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic_hours')); ?>:</b>
	<?php echo CHtml::encode($data->basic_hours); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hour_salary')); ?>:</b>
	<?php echo CHtml::encode($data->hour_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x1')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x1_hour')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x1_hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x2')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x2_hour')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x2_hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x3')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_x3_hour')); ?>:</b>
	<?php echo CHtml::encode($data->salary_x3_hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_quanqin')); ?>:</b>
	<?php echo CHtml::encode($data->award_quanqin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_jineng')); ?>:</b>
	<?php echo CHtml::encode($data->award_jineng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_shengchang')); ?>:</b>
	<?php echo CHtml::encode($data->award_shengchang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_yeban')); ?>:</b>
	<?php echo CHtml::encode($data->award_yeban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_tegang')); ?>:</b>
	<?php echo CHtml::encode($data->award_tegang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_zhufang')); ?>:</b>
	<?php echo CHtml::encode($data->award_zhufang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_nianzi')); ?>:</b>
	<?php echo CHtml::encode($data->award_nianzi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_guojie')); ?>:</b>
	<?php echo CHtml::encode($data->award_guojie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_gaowen')); ?>:</b>
	<?php echo CHtml::encode($data->award_gaowen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_qita')); ?>:</b>
	<?php echo CHtml::encode($data->award_qita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_nianzhong')); ?>:</b>
	<?php echo CHtml::encode($data->award_nianzhong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiaozhengqian')); ?>:</b>
	<?php echo CHtml::encode($data->tiaozhengqian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiaozhenghou')); ?>:</b>
	<?php echo CHtml::encode($data->tiaozhenghou); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_debit')); ?>:</b>
	<?php echo CHtml::encode($data->total_debit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_nianjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_nianjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_nianjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_nianjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_gongsifangjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_gongsifangjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_gongsifangjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_gongsifangjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_hunjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_hunjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_hunjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_hunjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_chanjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_chanjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_chanjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_chanjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_sangjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_sangjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_sangjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_sangjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_shijia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_shijia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_shijia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_shijia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_bingjia')); ?>:</b>
	<?php echo CHtml::encode($data->debit_bingjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_bingjia')); ?>:</b>
	<?php echo CHtml::encode($data->hours_bingjia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_kuanggong')); ?>:</b>
	<?php echo CHtml::encode($data->debit_kuanggong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_kuanggong')); ?>:</b>
	<?php echo CHtml::encode($data->hours_kuanggong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_chidaozaotui')); ?>:</b>
	<?php echo CHtml::encode($data->debit_chidaozaotui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_chidaozaotui')); ?>:</b>
	<?php echo CHtml::encode($data->hours_chidaozaotui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debit_qita')); ?>:</b>
	<?php echo CHtml::encode($data->debit_qita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_tax')); ?>:</b>
	<?php echo CHtml::encode($data->personal_tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->personal_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_fund')); ?>:</b>
	<?php echo CHtml::encode($data->personal_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_tatal_cost')); ?>:</b>
	<?php echo CHtml::encode($data->company_tatal_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->company_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_fund')); ?>:</b>
	<?php echo CHtml::encode($data->company_fund); ?>
	<br />

	*/ ?>

</div>