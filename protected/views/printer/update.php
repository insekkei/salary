<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'打印机 '=>array('admin'),
//	$model->name=>array('view','id'=>$model->unused_id),
	'更新纸盘长度',
);

// $this->menu=array(
// 	array('label'=>'List Printer', 'url'=>array('index')),
// 	array('label'=>'Create Printer', 'url'=>array('create')),
// 	array('label'=>'View Printer', 'url'=>array('view', 'id'=>$model->unused_id)),
// 	array('label'=>'Manage Printer', 'url'=>array('admin')),
// );
?>

<h1>更新 <?php echo $model->name; ?> 的纸盘</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>