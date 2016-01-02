<?php
/* @var $this SalaryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'薪资查询',
);

$this->menu=array(
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>薪资查询</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
