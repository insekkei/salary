<?php 
 	header("Cache-control:no-cache,no-store,must-revalidate");
    header("Pragma:no-cache");
	header("Expires:Mon,26 Jul 1997 05:00:00 GMT");

	Yii::app()->clientScript->registerScript('noaction', "

		// 判断哪个页面 ?xxx
		var num;
		var location = window.location.search;
		if (location.match('employer/home') == 'employer/home') {
			// 首页无动作
		}
		else if (location.match('employer/login') == 'employer/login') {
			// 登录页40s
			num = 40;
			setInterval(check, 1000);
		}
		else {
			// 工资详情等其它页面5min
			num = 300
			setInterval(check, 1000);
		}

		// 页面事件检测，5分钟无动静则刷新页面
		var count = num;
		
		function check () {
			if (count === 0) {
				window.location.href='/salary/index.php?r=employer/logout';
			}
			count--;
		}
		document.body.onmousedown=function(){
			count = num;
		}
		document.body.onkeydown=function(){
			count = num;
		}
	");
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_employer/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_employer/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_employer/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css_employer/form.css">

	<object  id="LODOP_OB" classid="clsid:2105C259-1E0C-4534-8141-A753534CB4CA" width=0 height=0> 
       <embed id="LODOP_EM" type="application/x-print-lodop" width=0 height=0></embed>
	</object>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by ECCO（厦门)<br/>
	</div><!-- footer -->

</div><!-- page -->
</body>
</html>
