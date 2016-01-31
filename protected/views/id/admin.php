<?php
/* @var $this IdController */
/* @var $model Id */

$this->breadcrumbs=array(
	'查询打印记录',
	'管理',
);

// $this->menu=array(
// 	array('label'=>'List Id', 'url'=>array('index')),
// 	array('label'=>'Create Id', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#id-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>查询打印记录</h2>


<?php echo CHtml::link('高级查找','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'id-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		// array(
		// 	'class'=>'CButtonColumn',
		// 	'header' => '操作',
		// 	'template'=>'{delete}{update}',   
		// ),
	),
)); ?>
