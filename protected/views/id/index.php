<?php
/* @var $this IdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ids',
);

$this->menu=array(
	array('label'=>'Create Id', 'url'=>array('create')),
	array('label'=>'Manage Id', 'url'=>array('admin')),
);
?>

<h1>Ids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
