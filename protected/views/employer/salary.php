<!-- 打印button -->
<?php
$url = Yii::app()->createUrl("salary/printed", array("employer_id"=>$model->employer_id,"salary_date"=>$model->salary_date));
?>
<a href="<?php echo $url;?>" class="print print-button<?php echo CHtml::encode($model->print_status);?>">打印</a>
<?php

Yii::app()->clientScript->registerScript('print', "
	// 更改打印地址
	$('.print-button0').click(function(e){
		var url = $(this).attr('href');
		$.get(url, function(){
			window.location.reload();
		});
		e.preventDefault();
	});

	");
?>
<div class="salarydetails">
	<dl class="clearfix"> 
		<dt>月份</dt> 
	    <dd id="month-print">上月</dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('total_pay'));?></dt> 
	    <dd><?php echo CHtml::encode($model->total_pay);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('total_salary'));?></dt> 
	    <dd><?php echo CHtml::encode($model->total_salary);?></dd> 
	</dl>
	<dl class="clearfix"> 
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('basic_salary'));?></dt> 
	    <dd><?php echo CHtml::encode($model->basic_salary);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('basic_hours'));?></dt> 
	    <dd><?php echo CHtml::encode($model->basic_hours);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hour_salary'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hour_salary);?></dd> 
	</dl>
	<dl class="clearfix"> 
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x1'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x1);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x1_hour'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x1_hour);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x2'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x2);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x2_hour'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x2_hour);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x3'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x3);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x3_hour'));?></dt> 
	    <dd><?php echo CHtml::encode($model->salary_x3_hour);?></dd> 
	</dl>
	<dl class="clearfix award"> 
		<dt><?php echo CHtml::encode($model->getAttributeLabel('award_quanqin'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_quanqin);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_jineng'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_jineng);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_shengchang'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_shengchang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_yeban'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_yeban);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_tegang'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_tegang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_zhufang'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_zhufang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_nianzi'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_nianzi);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_guojie'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_guojie);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_gaowen'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_gaowen);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_qita'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_qita);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_nianzhong'));?></dt> 
	    <dd><?php echo CHtml::encode($model->award_nianzhong);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('tiaozhengqian'));?></dt> 
	    <dd><?php echo CHtml::encode($model->tiaozhengqian);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('tiaozhenghou'));?></dt> 
	    <dd><?php echo CHtml::encode($model->tiaozhenghou);?></dd> 
	</dl>
	<dl class="clearfix debit"> 
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('total_debit'));?></dt> 
	    <dd><?php echo CHtml::encode($model->total_debit);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_nianjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_nianjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_nianjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_nianjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_gongsifangjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_gongsifangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_gongsifangjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_gongsifangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_hunjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_hunjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_hunjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_hunjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_chanjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_chanjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_chanjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_chanjia);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_sangjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_sangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_sangjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_sangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_shijia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_shijia);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_shijia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_shijia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_bingjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_bingjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_bingjia'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_bingjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_kuanggong'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_kuanggong);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_kuanggong'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_kuanggong);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_chidaozaotui'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_chidaozaotui);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_chidaozaotui'));?></dt> 
	    <dd><?php echo CHtml::encode($model->hours_chidaozaotui);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_qita'));?></dt> 
	    <dd><?php echo CHtml::encode($model->debit_qita);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_tax'));?></dt> 
	    <dd><?php echo CHtml::encode($model->personal_tax);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_insurance'));?></dt> 
	    <dd><?php echo CHtml::encode($model->personal_insurance);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_fund'));?></dt> 
	    <dd><?php echo CHtml::encode($model->personal_fund);?></dd> 
	</dl>
	<dl class="clearfix">
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_tatal_cost'));?></dt> 
	    <dd><?php echo CHtml::encode($model->company_tatal_cost);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_insurance'));?></dt> 
	    <dd><?php echo CHtml::encode($model->company_insurance);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_fund'));?></dt> 
	    <dd><?php echo CHtml::encode($model->company_fund);?></dd> 
	</dl>
<?php 

// $this->widget('zii.widgets.CDetailView', array(
	/*'data'=>$model,
	'attributes'=>array(*/
/*		'employer_id',
		'salary_date',
		'print_status',
		'total_salary',
		'total_pay',*/
		/*'basic_salary',
		'basic_hours',
		'hour_salary',*/
		/*'salary_x1',
		'salary_x1_hour',
		'salary_x2',
		'salary_x2_hour',
		'salary_x3',
		'salary_x3_hour',*/
		/*'award_quanqin',
		'award_jineng',
		'award_shengchang',
		'award_yeban',
		'award_tegang',
		'award_zhufang',
		'award_nianzi',
		'award_guojie',
		'award_gaowen',
		'award_qita',
		'award_nianzhong',
		'tiaozhengqian',
		'tiaozhenghou',*/
		/*'total_debit',
		'debit_nianjia',
		'hours_nianjia',
		'debit_gongsifangjia',
		'hours_gongsifangjia',
		'debit_hunjia',
		'hours_hunjia',
		'debit_chanjia',
		'hours_chanjia',
		'debit_sangjia',
		'hours_sangjia',
		'debit_shijia',
		'hours_shijia',
		'debit_bingjia',
		'hours_bingjia',
		'debit_kuanggong',
		'hours_kuanggong',
		'debit_chidaozaotui',
		'hours_chidaozaotui',
		'debit_qita',
		'personal_tax',
		'personal_insurance',
		'personal_fund',*/
		/*'company_tatal_cost',
		'company_insurance',
		'company_fund',*/
	// ),
// )); ?>
</div>