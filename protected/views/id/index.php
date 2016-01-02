<?php
/* @var $this IdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'查询记录',
);

// $this->menu=array(
// 	array('label'=>'Create Id', 'url'=>array('create')),
// 	array('label'=>'Manage Id', 'url'=>array('admin')),
// );
?>

<h1>用户查询打印薪资纪录</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
