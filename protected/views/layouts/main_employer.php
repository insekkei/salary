<?php 
 	header("Cache-control:no-cache,no-store,must-revalidate");
    header("Pragma:no-cache");
	header("Expires:Mon,26 Jul 1997 05:00:00 GMT");

	Yii::app()->clientScript->registerScript('noaction', "
		// 页面事件检测，60s无动静则刷新页面 
		setInterval(check, 60000);
		function check(){
			console.log(count);
			if(count == 0){
				window.location.href='/salary/index.php?r=employer/logout';
			}
			else {
				count = 0;
			}
		}
		var count = 0;
		document.body.onmousedown=function(){
			count++;
			window.status=count;
		}
		document.body.onkeydown=function(){
			count++;
			window.status=count;
		}
	");
?>
<!DOCTYPE html>
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
