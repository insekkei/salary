
<h1>薪资查询</h1>

<div class="salary-list clearfix">

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'template'=>'<div class="list">{items}</div>',
	)); ?>

	<div id="month-details">
		<!--这里加载详情-->
	</div>


</div>