<?php
/* @var $this IdController */
/* @var $model Id */

$this->breadcrumbs=array(
	'Ids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Id', 'url'=>array('index')),
	array('label'=>'Manage Id', 'url'=>array('admin')),
);
?>

<h1>Create Id</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>