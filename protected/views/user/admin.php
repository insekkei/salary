<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'员工信息'=>array('admin'),
	'管理',
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>重置用户密码</h1>


<?php echo CHtml::link('高级查找','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'employer_id',
		array(
            'name'=>'ic_num',
            'type'=>'raw',
            'filter'=>false,
        ),
		array(
            'name'=>'username',
            'type'=>'raw',
            'filter'=>false,
        ),
        array(
            'name'=>'position',
            'type'=>'raw',
            'filter'=>false,
        ),
        array(
            'name'=>'department',
            'type'=>'raw',
            'filter'=>false,
        ),
        array(
            'name'=>'locked',
            'value'=>'$data->locked == 1 ? "锁定" :"未锁定"',
            'filter'=>false,
        ),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{unlock}',
			'buttons'=> array(
				'unlock' => array(
					'label'=> '重置密码',
					'click'=>"function(){
								if(!confirm('确定要重置密码吗?')) 
									return false;
								return true;
                             }
                     ",
					 'url'=>'Yii::app()->createUrl("user/unlock", array("employer_id"=>$data->employer_id))',
				),

			),
		),
	),
)); ?>
