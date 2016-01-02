<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->employer_id=>array('view','id'=>$model->employer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
	array('label'=>'View Salary', 'url'=>array('view', 'id'=>$model->employer_id)),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>Update Salary <?php echo $model->employer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>