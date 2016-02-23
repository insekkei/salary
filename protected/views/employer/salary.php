<!-- 打印button -->
<?php
$url = Yii::app()->createUrl("salary/printed", array("employer_id"=>$model->employer_id,"salary_date"=>$model->salary_date));
$employer = $model->employer;
?>

<a href="<?php echo $url;?>" class="btn print-button<?php echo CHtml::encode($model->print_status);?>">打印</a>
<span class="btn print-button1">已打印</span>

<!--打印隐藏区域-->
<style type="text/css">
 .only_for_print {
 	display:none;
 	padding: 10px;
 }
 </style> 

<div id="page1" class="only_for_print">
	<p>ECCO(厦门)有限公司 - 薪资单</br>
	薪资月份：<span class="month-print">本月</span></p>
	<div style="border-top:1px solid #000"></div>
	<p>工号:<?php echo CHtml::encode($model->employer_id);?> 姓名:<?php echo CHtml::encode($employer->department); ?></p>
</div>
<OBJECT  ID="jatoolsPrinter" CLASSID="CLSID:B43D3361-D075-4BE2-87FE-057188254255" 
	              codebase="jatoolsPrinter.cab#version=8,6,0,0" height=0 width=0></OBJECT> 
<!--打印隐藏区域over-->


<div class="salarydetails">
	<dl class="clearfix"> 
		<dt><?php echo CHtml::encode($model->getAttributeLabel('employer_id'));?>：</dt> 
		<dd id="pr_employer_id"><?php echo CHtml::encode($model->employer_id);?></dd>
		
		<dt>姓名：</dt>
		<dd id="pr_username"><?php echo CHtml::encode($employer->username); ?></dd>

		<dt>部门：</dt>
		<dd id="pr_department"><?php echo CHtml::encode($employer->department); ?></dd>

		<dt>月份：</dt>
	    <dd id="month-print">上月</dd> 
	</dl>
	<dl class="clearfix"> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('total_pay'));?></dt> 
	    <dd id="pr_total_pay"><?php echo CHtml::encode($model->total_pay);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('total_salary'));?></dt> 
	    <dd id="pr_total_salary"><?php echo CHtml::encode($model->total_salary);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('basic_salary'));?></dt> 
	    <dd id="pr_basic_salary"><?php echo CHtml::encode($model->basic_salary);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('basic_hours'));?></dt> 
	    <dd id="pr_basic_hours"><?php echo CHtml::encode($model->basic_hours);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hour_salary'));?></dt> 
	    <dd id="pr_hour_salary"><?php echo CHtml::encode($model->hour_salary);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('basic_salary_off'));?></dt> 
	    <dd id="pr_basic_salary_off"><?php echo CHtml::encode($model->basic_salary_off);?></dd> 
	</dl>
	<dl class="clearfix award"> 
		<dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x1'));?></dt> 
	    <dd id="pr_salary_x1"><?php echo CHtml::encode($model->salary_x1);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x2'));?></dt> 
	    <dd id="pr_salary_x2"><?php echo CHtml::encode($model->salary_x2);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x3'));?></dt> 
	    <dd id="pr_salary_x3"><?php echo CHtml::encode($model->salary_x3);?></dd> 

		<dt><?php echo CHtml::encode($model->getAttributeLabel('award_quanqin'));?></dt> 
	    <dd id="pr_award_quanqin"><?php echo CHtml::encode($model->award_quanqin);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_jineng'));?></dt> 
	    <dd id="pr_award_jineng"><?php echo CHtml::encode($model->award_jineng);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_shengchang'));?></dt> 
	    <dd id="pr_award_shengchang"><?php echo CHtml::encode($model->award_shengchang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_yeban'));?></dt> 
	    <dd id="pr_award_yeban"><?php echo CHtml::encode($model->award_yeban);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_tegang'));?></dt> 
	    <dd id="pr_award_tegang"><?php echo CHtml::encode($model->award_tegang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_zhufang'));?></dt> 
	    <dd id="pr_award_zhufang"><?php echo CHtml::encode($model->award_zhufang);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_nianzi'));?></dt> 
	    <dd id="pr_award_nianzi"><?php echo CHtml::encode($model->award_nianzi);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_guojie'));?></dt> 
	    <dd id="pr_award_guojie"><?php echo CHtml::encode($model->award_guojie);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_gaowen'));?></dt> 
	    <dd id="pr_award_gaowen"><?php echo CHtml::encode($model->award_gaowen);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_qita'));?></dt> 
	    <dd id="pr_award_qita"><?php echo CHtml::encode($model->award_qita);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('award_nianzhong'));?></dt> 
	    <dd id="pr_award_nianzhong"><?php echo CHtml::encode($model->award_nianzhong);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('tiaozhengqian'));?></dt> 
	    <dd id="pr_tiaozhengqian"><?php echo CHtml::encode($model->tiaozhengqian);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('tiaozhenghou'));?></dt> 
	    <dd id="pr_tiaozhenghou"><?php echo CHtml::encode($model->tiaozhenghou);?></dd> 
	</dl>
	<dl class="clearfix">
		<dt><?php echo CHtml::encode($model->getAttributeLabel('total_debit'));?></dt> 
	    <dd id="pr_total_debit"><?php echo CHtml::encode($model->total_debit);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_queqin'));?></dt> 
	    <dd id="pr_debit_queqin"><?php echo CHtml::encode($model->debit_queqin);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_shuihou'));?></dt> 
	    <dd id="pr_debit_shuihou"><?php echo CHtml::encode($model->debit_shuihou);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_award_tax'));?></dt> 
	    <dd id="pr_personal_award_tax"><?php echo CHtml::encode($model->personal_award_tax);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('debit_shuiqian_tiaozheng'));?></dt> 
	    <dd id="pr_debit_shuiqian_tiaozheng"><?php echo CHtml::encode($model->debit_shuiqian_tiaozheng);?></dd> 

		<dt><?php echo CHtml::encode($model->getAttributeLabel('personal_tax'));?></dt> 
	    <dd id="pr_personal_tax"><?php echo CHtml::encode($model->personal_tax);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_insurance'));?></dt> 
	    <dd id="pr_personal_insurance"><?php echo CHtml::encode($model->personal_insurance);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('personal_fund'));?></dt> 
	    <dd id="pr_personal_fund"><?php echo CHtml::encode($model->personal_fund);?></dd> 
	</dl>
	<dl class="clearfix debit"> 
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_nianjia'));?></dt> 
	    <dd id="pr_hours_nianjia"><?php echo CHtml::encode($model->hours_nianjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_gongsifangjia'));?></dt> 
	    <dd id="pr_hours_gongsifangjia"><?php echo CHtml::encode($model->hours_gongsifangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_hunjia'));?></dt> 
	    <dd id="pr_hours_hunjia"><?php echo CHtml::encode($model->hours_hunjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_chanjia'));?></dt> 
	    <dd id="pr_hours_chanjia"><?php echo CHtml::encode($model->hours_chanjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_sangjia'));?></dt> 
	    <dd id="pr_hours_sangjia"><?php echo CHtml::encode($model->hours_sangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_shijia'));?></dt> 
	    <dd id="pr_hours_shijia"><?php echo CHtml::encode($model->hours_shijia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_bingjia'));?></dt> 
	    <dd id="pr_hours_bingjia"><?php echo CHtml::encode($model->hours_bingjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_kuanggong'));?></dt> 
	    <dd id="pr_hours_kuanggong"><?php echo CHtml::encode($model->hours_kuanggong);?></dd> 

 		<dt><?php echo CHtml::encode($model->getAttributeLabel('hours_chidaozaotui'));?></dt> 
	    <dd id="pr_hours_chidaozaotui"><?php echo CHtml::encode($model->hours_chidaozaotui);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_buxiu'));?></dt> 
	    <dd id="pr_hours_buxiu"><?php echo CHtml::encode($model->hours_buxiu);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_chuchai'));?></dt> 
	    <dd id="pr_hours_chuchai"><?php echo CHtml::encode($model->hours_chuchai);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_gongshangjia'));?></dt> 
	    <dd id="pr_hours_gongshangjia"><?php echo CHtml::encode($model->hours_gongshangjia);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('hours_jiaban_queqin'));?></dt> 
	    <dd id="pr_hours_jiaban_queqin"><?php echo CHtml::encode($model->hours_jiaban_queqin);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x1_hour'));?></dt> 
	    <dd id="pr_salary_x1_hour"><?php echo CHtml::encode($model->salary_x1_hour);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x2_hour'));?></dt> 
	    <dd id="pr_salary_x2_hour"><?php echo CHtml::encode($model->salary_x2_hour);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('salary_x3_hour'));?></dt> 
	    <dd id="pr_salary_x3_hour"><?php echo CHtml::encode($model->salary_x3_hour);?></dd> 
	</dl>
	<dl class="clearfix">
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_tatal_cost'));?></dt> 
	    <dd id="pr_company_tatal_cost"><?php echo CHtml::encode($model->company_tatal_cost);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_insurance'));?></dt> 
	    <dd id="pr_company_insurance"><?php echo CHtml::encode($model->company_insurance);?></dd> 
	    
	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_fund'));?></dt> 
	    <dd id="pr_company_fund"><?php echo CHtml::encode($model->company_fund);?></dd> 

	    <dt><?php echo CHtml::encode($model->getAttributeLabel('company_award_tax'));?></dt> 
	    <dd id="pr_company_award_tax"><?php echo CHtml::encode($model->company_award_tax);?></dd> 
	</dl>
</div>

