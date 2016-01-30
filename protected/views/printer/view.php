<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'Printers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Printer', 'url'=>array('index')),
	array('label'=>'Create Printer', 'url'=>array('create')),
	array('label'=>'Update Printer', 'url'=>array('update', 'id'=>$model->unused_id)),
	array('label'=>'Delete Printer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->unused_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Printer', 'url'=>array('admin')),
);
?>

<h1>View Printer #<?php echo $model->unused_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'unused_id',
		'id',
		'name',
		'total_length',
		'length',
		'printed',
	),
)); ?>
