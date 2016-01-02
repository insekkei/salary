<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->employer_id,
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
	array('label'=>'Update Salary', 'url'=>array('update', 'id'=>$model->employer_id)),
	array('label'=>'Delete Salary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->employer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>View Salary #<?php echo $model->employer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'employer_id',
		'salary_date',
		'print_status',
		'total_salary',
		'total_pay',
		'basic_salary',
		'basic_hours',
		'hour_salary',
		'salary_x1',
		'salary_x1_hour',
		'salary_x2',
		'salary_x2_hour',
		'salary_x3',
		'salary_x3_hour',
		'award_quanqin',
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
		'tiaozhenghou',
		'total_debit',
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
		'personal_fund',
		'company_tatal_cost',
		'company_insurance',
		'company_fund',
	),
)); ?>
