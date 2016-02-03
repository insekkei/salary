
<div class="homediv">
	<input type="hidden" id="msg" value="<?php echo $msg; ?>"/>
	<h2 id="msg-info"></h2>
</div>

<?php 
	Yii::app()->clientScript->registerScript('changeok', "
		// 页面事件检测，5分钟无动静则刷新页面
		var msg = $('#msg').val();
		if (msg == 1) {
			$('#msg-info').html('密码修改成功，请您重新登录。');
			setTimeout(redirectTo, 2000);
		}
		else {
			$('#msg-info').html('网络错误，密码修改失败，请稍候重试。');
			setTimeout(redirectToB, 2000);
		}
		function redirectTo () {
			window.location.href = '/salary/index.php?r=employer/logout';
		}
		function redirectToB () {
			history.back();
		}
	");
?>