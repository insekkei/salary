<?php
/* @var $this IdController */
/* @var $model Id */

$this->breadcrumbs=array(
	'Ids'=>array('index'),
	$model->unused_id=>array('view','id'=>$model->unused_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Id', 'url'=>array('index')),
	array('label'=>'Create Id', 'url'=>array('create')),
	array('label'=>'View Id', 'url'=>array('view', 'id'=>$model->unused_id)),
	array('label'=>'Manage Id', 'url'=>array('admin')),
);
?>

<h1>Update Id <?php echo $model->unused_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>