
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

<div class="user-actions">
	<span id="successMessage"></span>
	<a href="/salary/index.php?r=employer/changepassword&employer_id=" id="changepwd-link">修改密码</a>
	<a href="/salary/index.php?r=employer/logout">退出系统</a>
</div>

<?php
Yii::app()->clientScript->registerScript('changepwd', "

	var msg = window.location.search.split('&')[1];
	if (msg === 'msg=1') {
		$('#successMessage').html('密码修改成功！').fadeOut(3000);
	}

	$('#changepwd-link').bind('click', function(e){
		var url = $(this).attr('href');
		var employerId = window.location.search.split('&')[1].split('=')[1];
		url = url + employerId;
		window.location.href = url;
		e.preventDefault();
	});
	
	
");


	Yii::app ()->clientScript->registerScriptFile ( Yii::app()->baseUrl.'/js/LodopFuncs.js', CClientScript::POS_HEAD );
	Yii::app ()->clientScript->registerScriptFile ( Yii::app()->baseUrl.'/js/print.js', CClientScript::POS_HEAD );
	
?>