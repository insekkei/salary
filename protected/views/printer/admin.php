<h2>打印状态</h2>

<?php
/* @var $this PrinterController */
/* @var $model Printer */

$this->breadcrumbs=array(
	'打印机'=>array('admin'),
	'打印状态',
);

// $this->menu=array(
// 	array('label'=>'List Printer', 'url'=>array('index')),
// 	array('label'=>'Create Printer', 'url'=>array('create')),
// );

// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$('#printer-grid').yiiGridView('update', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
echo '<div class="scrollbar">';
foreach ($model->search()->getData() as $printer ) {
	echo '<div class="scrollWrap">';
	echo '<div class="print-name">'.$printer->name.'：</div>';
	echo '<div class="printers">';
	echo '<div class="print-num">'.$printer->printed.'</div>';
	echo '<div class="print-total">'.($printer->total_length / $printer->length).'</div>';
	echo '</div>';
	echo '<div class="scrollBg">';
	echo '<div class="print-total">'.($printer->total_length / $printer->length - $printer->printed).'</div>';
	echo '</div>';
	echo '</div>';
}
echo '</div>';
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'printer-grid',
	'dataProvider'=>$model->search(),
	'template'=>'{items}',
	//'filter'=>$model,
	'columns'=>array(
	//	'unused_id',
	//	'id',
		'name',
		'total_length',
		'length',
		'printed',
		array(
			'class'=>'CDataColumn',
			'name'=>'可打印总张数',
			'value'=>'$data->total_length / $data->length',
		),

		array(
			'class'=>'CDataColumn',
			'name'=>'剩余可打印张数',
			'value'=>'$data->total_length/$data->length - $data->printed',
		),
		'emails',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{myupdate}',
			'buttons'=> array(
				'myupdate' => array(
					'label'=> '更新纸盘',
					 'url'=>'Yii::app()->createUrl("printer/update", array("id"=>$data->unused_id))',
				),

			),
		),

	),
)); 


Yii::app()->clientScript->registerScript('progressbar', "
	queryNum();
	// 进度条
	function queryNum () {
		$('.scrollbar .printers').each(function (index) {
			var printed = $(this).find('.print-num').html();
			var printTotal = $(this).find('.print-total').html();
			var persent = Number(printed) / Number(printTotal) * 100 + '%';
			$(this).css('width', persent);
		});
	}
");
?>

