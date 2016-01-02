<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salary-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salaries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salary-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'employer_id',
		'salary_date',
		'print_status',
		'total_salary',
		'total_pay',
		'basic_salary',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
