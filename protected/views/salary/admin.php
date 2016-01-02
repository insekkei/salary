<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'激活打印'=>array('admin'),
);

// $this->menu=array(
// 	array('label'=>'List Salary', 'url'=>array('index')),
// 	array('label'=>'Create Salary', 'url'=>array('create')),
// );

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

<h1>激活薪资打印</h1>


<?php echo CHtml::link('高级查找','#',array('class'=>'search-button')); ?>
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
		 array(
            'name'=>'print_status',
            'type'=>'raw',
            'value'=>'$data->print_status == 1 ? "是" : "否"',
            'filter'=>false,
        ),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{print}',
			'buttons'=> array(
				'print' => array(
					'label'=> '激活打印',
					'click'=>"function(){
								if(!confirm('确定要激活该员工的薪资打印吗?')) 
									return false;
								return true;
                             }
                     ",
					 'url'=>'Yii::app()->createUrl("salary/print", array("employer_id"=>$data->employer_id,"salary_date"=>$data->salary_date))',
				),

			),
		),
	),
)); ?>
