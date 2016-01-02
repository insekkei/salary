<?php
/* @var $this IdController */
/* @var $model Id */

$this->breadcrumbs=array(
	'Ids'=>array('index'),
	$model->unused_id,
);

$this->menu=array(
	array('label'=>'List Id', 'url'=>array('index')),
	array('label'=>'Create Id', 'url'=>array('create')),
	array('label'=>'Update Id', 'url'=>array('update', 'id'=>$model->unused_id)),
	array('label'=>'Delete Id', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->unused_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Id', 'url'=>array('admin')),
);
?>

<h1>View Id #<?php echo $model->unused_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'unused_id',
		'id',
		'date',
	),
)); ?>
