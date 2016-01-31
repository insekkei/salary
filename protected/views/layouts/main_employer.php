<?php 
 	header("Cache-control:no-cache,no-store,must-revalidate");
    header("Pragma:no-cache");
	header("Expires:Mon,26 Jul 1997 05:00:00 GMT");

	Yii::app()->clientScript->registerScript('noaction', "
		// 页面事件检测，30s无动静则刷新页面
		var num = 30;
		var count = num;
		setInterval(check, 1000);
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
