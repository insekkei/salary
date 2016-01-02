<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'employer_id'); ?>
		<?php echo $form->textField($model,'employer_id',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_date'); ?>
		<?php echo $form->textField($model,'salary_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'print_status'); ?>
		<?php echo $form->textField($model,'print_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_salary'); ?>
		<?php echo $form->textField($model,'total_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_pay'); ?>
		<?php echo $form->textField($model,'total_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'basic_salary'); ?>
		<?php echo $form->textField($model,'basic_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'basic_hours'); ?>
		<?php echo $form->textField($model,'basic_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hour_salary'); ?>
		<?php echo $form->textField($model,'hour_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x1'); ?>
		<?php echo $form->textField($model,'salary_x1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x1_hour'); ?>
		<?php echo $form->textField($model,'salary_x1_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x2'); ?>
		<?php echo $form->textField($model,'salary_x2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x2_hour'); ?>
		<?php echo $form->textField($model,'salary_x2_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x3'); ?>
		<?php echo $form->textField($model,'salary_x3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_x3_hour'); ?>
		<?php echo $form->textField($model,'salary_x3_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_quanqin'); ?>
		<?php echo $form->textField($model,'award_quanqin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_jineng'); ?>
		<?php echo $form->textField($model,'award_jineng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_shengchang'); ?>
		<?php echo $form->textField($model,'award_shengchang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_yeban'); ?>
		<?php echo $form->textField($model,'award_yeban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_tegang'); ?>
		<?php echo $form->textField($model,'award_tegang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_zhufang'); ?>
		<?php echo $form->textField($model,'award_zhufang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_nianzi'); ?>
		<?php echo $form->textField($model,'award_nianzi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_guojie'); ?>
		<?php echo $form->textField($model,'award_guojie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_gaowen'); ?>
		<?php echo $form->textField($model,'award_gaowen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_qita'); ?>
		<?php echo $form->textField($model,'award_qita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'award_nianzhong'); ?>
		<?php echo $form->textField($model,'award_nianzhong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiaozhengqian'); ?>
		<?php echo $form->textField($model,'tiaozhengqian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiaozhenghou'); ?>
		<?php echo $form->textField($model,'tiaozhenghou'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debit'); ?>
		<?php echo $form->textField($model,'total_debit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_nianjia'); ?>
		<?php echo $form->textField($model,'debit_nianjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_nianjia'); ?>
		<?php echo $form->textField($model,'hours_nianjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_gongsifangjia'); ?>
		<?php echo $form->textField($model,'debit_gongsifangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_gongsifangjia'); ?>
		<?php echo $form->textField($model,'hours_gongsifangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_hunjia'); ?>
		<?php echo $form->textField($model,'debit_hunjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_hunjia'); ?>
		<?php echo $form->textField($model,'hours_hunjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_chanjia'); ?>
		<?php echo $form->textField($model,'debit_chanjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_chanjia'); ?>
		<?php echo $form->textField($model,'hours_chanjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_sangjia'); ?>
		<?php echo $form->textField($model,'debit_sangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_sangjia'); ?>
		<?php echo $form->textField($model,'hours_sangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_shijia'); ?>
		<?php echo $form->textField($model,'debit_shijia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_shijia'); ?>
		<?php echo $form->textField($model,'hours_shijia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_bingjia'); ?>
		<?php echo $form->textField($model,'debit_bingjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_bingjia'); ?>
		<?php echo $form->textField($model,'hours_bingjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_kuanggong'); ?>
		<?php echo $form->textField($model,'debit_kuanggong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_kuanggong'); ?>
		<?php echo $form->textField($model,'hours_kuanggong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_chidaozaotui'); ?>
		<?php echo $form->textField($model,'debit_chidaozaotui'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_chidaozaotui'); ?>
		<?php echo $form->textField($model,'hours_chidaozaotui'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debit_qita'); ?>
		<?php echo $form->textField($model,'debit_qita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personal_tax'); ?>
		<?php echo $form->textField($model,'personal_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personal_insurance'); ?>
		<?php echo $form->textField($model,'personal_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personal_fund'); ?>
		<?php echo $form->textField($model,'personal_fund'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_tatal_cost'); ?>
		<?php echo $form->textField($model,'company_tatal_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_insurance'); ?>
		<?php echo $form->textField($model,'company_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_fund'); ?>
		<?php echo $form->textField($model,'company_fund'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->