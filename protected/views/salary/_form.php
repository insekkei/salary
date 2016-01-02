<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salary-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_id'); ?>
		<?php echo $form->textField($model,'employer_id',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'employer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_date'); ?>
		<?php echo $form->textField($model,'salary_date'); ?>
		<?php echo $form->error($model,'salary_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'print_status'); ?>
		<?php echo $form->textField($model,'print_status'); ?>
		<?php echo $form->error($model,'print_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_salary'); ?>
		<?php echo $form->textField($model,'total_salary'); ?>
		<?php echo $form->error($model,'total_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_pay'); ?>
		<?php echo $form->textField($model,'total_pay'); ?>
		<?php echo $form->error($model,'total_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basic_salary'); ?>
		<?php echo $form->textField($model,'basic_salary'); ?>
		<?php echo $form->error($model,'basic_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basic_hours'); ?>
		<?php echo $form->textField($model,'basic_hours'); ?>
		<?php echo $form->error($model,'basic_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hour_salary'); ?>
		<?php echo $form->textField($model,'hour_salary'); ?>
		<?php echo $form->error($model,'hour_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x1'); ?>
		<?php echo $form->textField($model,'salary_x1'); ?>
		<?php echo $form->error($model,'salary_x1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x1_hour'); ?>
		<?php echo $form->textField($model,'salary_x1_hour'); ?>
		<?php echo $form->error($model,'salary_x1_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x2'); ?>
		<?php echo $form->textField($model,'salary_x2'); ?>
		<?php echo $form->error($model,'salary_x2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x2_hour'); ?>
		<?php echo $form->textField($model,'salary_x2_hour'); ?>
		<?php echo $form->error($model,'salary_x2_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x3'); ?>
		<?php echo $form->textField($model,'salary_x3'); ?>
		<?php echo $form->error($model,'salary_x3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_x3_hour'); ?>
		<?php echo $form->textField($model,'salary_x3_hour'); ?>
		<?php echo $form->error($model,'salary_x3_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_quanqin'); ?>
		<?php echo $form->textField($model,'award_quanqin'); ?>
		<?php echo $form->error($model,'award_quanqin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_jineng'); ?>
		<?php echo $form->textField($model,'award_jineng'); ?>
		<?php echo $form->error($model,'award_jineng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_shengchang'); ?>
		<?php echo $form->textField($model,'award_shengchang'); ?>
		<?php echo $form->error($model,'award_shengchang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_yeban'); ?>
		<?php echo $form->textField($model,'award_yeban'); ?>
		<?php echo $form->error($model,'award_yeban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_tegang'); ?>
		<?php echo $form->textField($model,'award_tegang'); ?>
		<?php echo $form->error($model,'award_tegang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_zhufang'); ?>
		<?php echo $form->textField($model,'award_zhufang'); ?>
		<?php echo $form->error($model,'award_zhufang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_nianzi'); ?>
		<?php echo $form->textField($model,'award_nianzi'); ?>
		<?php echo $form->error($model,'award_nianzi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_guojie'); ?>
		<?php echo $form->textField($model,'award_guojie'); ?>
		<?php echo $form->error($model,'award_guojie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_gaowen'); ?>
		<?php echo $form->textField($model,'award_gaowen'); ?>
		<?php echo $form->error($model,'award_gaowen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_qita'); ?>
		<?php echo $form->textField($model,'award_qita'); ?>
		<?php echo $form->error($model,'award_qita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'award_nianzhong'); ?>
		<?php echo $form->textField($model,'award_nianzhong'); ?>
		<?php echo $form->error($model,'award_nianzhong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiaozhengqian'); ?>
		<?php echo $form->textField($model,'tiaozhengqian'); ?>
		<?php echo $form->error($model,'tiaozhengqian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiaozhenghou'); ?>
		<?php echo $form->textField($model,'tiaozhenghou'); ?>
		<?php echo $form->error($model,'tiaozhenghou'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debit'); ?>
		<?php echo $form->textField($model,'total_debit'); ?>
		<?php echo $form->error($model,'total_debit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_nianjia'); ?>
		<?php echo $form->textField($model,'debit_nianjia'); ?>
		<?php echo $form->error($model,'debit_nianjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_nianjia'); ?>
		<?php echo $form->textField($model,'hours_nianjia'); ?>
		<?php echo $form->error($model,'hours_nianjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_gongsifangjia'); ?>
		<?php echo $form->textField($model,'debit_gongsifangjia'); ?>
		<?php echo $form->error($model,'debit_gongsifangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_gongsifangjia'); ?>
		<?php echo $form->textField($model,'hours_gongsifangjia'); ?>
		<?php echo $form->error($model,'hours_gongsifangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_hunjia'); ?>
		<?php echo $form->textField($model,'debit_hunjia'); ?>
		<?php echo $form->error($model,'debit_hunjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_hunjia'); ?>
		<?php echo $form->textField($model,'hours_hunjia'); ?>
		<?php echo $form->error($model,'hours_hunjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_chanjia'); ?>
		<?php echo $form->textField($model,'debit_chanjia'); ?>
		<?php echo $form->error($model,'debit_chanjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_chanjia'); ?>
		<?php echo $form->textField($model,'hours_chanjia'); ?>
		<?php echo $form->error($model,'hours_chanjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_sangjia'); ?>
		<?php echo $form->textField($model,'debit_sangjia'); ?>
		<?php echo $form->error($model,'debit_sangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_sangjia'); ?>
		<?php echo $form->textField($model,'hours_sangjia'); ?>
		<?php echo $form->error($model,'hours_sangjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_shijia'); ?>
		<?php echo $form->textField($model,'debit_shijia'); ?>
		<?php echo $form->error($model,'debit_shijia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_shijia'); ?>
		<?php echo $form->textField($model,'hours_shijia'); ?>
		<?php echo $form->error($model,'hours_shijia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_bingjia'); ?>
		<?php echo $form->textField($model,'debit_bingjia'); ?>
		<?php echo $form->error($model,'debit_bingjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_bingjia'); ?>
		<?php echo $form->textField($model,'hours_bingjia'); ?>
		<?php echo $form->error($model,'hours_bingjia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_kuanggong'); ?>
		<?php echo $form->textField($model,'debit_kuanggong'); ?>
		<?php echo $form->error($model,'debit_kuanggong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_kuanggong'); ?>
		<?php echo $form->textField($model,'hours_kuanggong'); ?>
		<?php echo $form->error($model,'hours_kuanggong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_chidaozaotui'); ?>
		<?php echo $form->textField($model,'debit_chidaozaotui'); ?>
		<?php echo $form->error($model,'debit_chidaozaotui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hours_chidaozaotui'); ?>
		<?php echo $form->textField($model,'hours_chidaozaotui'); ?>
		<?php echo $form->error($model,'hours_chidaozaotui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debit_qita'); ?>
		<?php echo $form->textField($model,'debit_qita'); ?>
		<?php echo $form->error($model,'debit_qita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_tax'); ?>
		<?php echo $form->textField($model,'personal_tax'); ?>
		<?php echo $form->error($model,'personal_tax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_insurance'); ?>
		<?php echo $form->textField($model,'personal_insurance'); ?>
		<?php echo $form->error($model,'personal_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_fund'); ?>
		<?php echo $form->textField($model,'personal_fund'); ?>
		<?php echo $form->error($model,'personal_fund'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_tatal_cost'); ?>
		<?php echo $form->textField($model,'company_tatal_cost'); ?>
		<?php echo $form->error($model,'company_tatal_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_insurance'); ?>
		<?php echo $form->textField($model,'company_insurance'); ?>
		<?php echo $form->error($model,'company_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_fund'); ?>
		<?php echo $form->textField($model,'company_fund'); ?>
		<?php echo $form->error($model,'company_fund'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->