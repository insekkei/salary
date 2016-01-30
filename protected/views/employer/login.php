<div class="form">
	<h1>ECCO（厦门）薪资打印系统</h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_id'); ?>（请刷工卡）
		<?php echo $form->error($model,'employer_id'); ?>
		<?php echo $form->textField($model,'employer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
	</div>

	<div id="keyboard">
		<span class="number">0</span>
		<span class="number">1</span>
		<span class="number">2</span>
		<span class="number">3</span>
		<span class="number">4</span>
		<span class="number">5</span>
		<span class="number">6</span>
		<span class="number">7</span>
		<span class="number">8</span>
		<span class="number">9</span>
		<span class="delete">删除</span>
		<span class="removeAll">清空</span>
		<span class="confirm">确定</span>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('登录'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<?php
Yii::app()->clientScript->registerScript('password', "
	
	var cardInput = $('#LoginForm_employer_id');
	var pwdInput = $('#LoginForm_password');
	var keyboard = $('#keyboard');

	// cardInput.attr('readonly', 'readonly');

	// load id
	var int=window.setInterval(loadIdData, 300);
	function loadIdData() {
		$.ajax({
			type: 'get',
			async: false,
			url: 'http://192.168.199.210:8080/id',
			dataType: 'jsonp',
			jsonp: 'callback',
			jsonpCallback:'callbackid',
			success: function(data){
				var id;
				$.each(data, function(i, index){
					id = data[0];
				});
				if (id.length === 10) {
					var array = id.split('');
					var arrayNew = new Array();
					arrayNew.push(array['6'], array['7'], array['4'], array['5'], array['2'], array['3'], array['0'], array['1']);
					arrayNew = arrayNew.join('');
					var number = parseInt(arrayNew, 16);
					// get 工号by 卡号
					var url = '/salary/index.php?r=user/getemployerid&ic_num=' + number;
					$.get(url, function(data){
						var employerId = data.substring(1, data.length-1);		
						cardInput.val(employerId);
						pwdInput.focus();
						pwdInput.parent('.row').append(keyboard);
						keyboard.slideDown();
						window.clearInterval(int);
					})
				}
			},
			error: function(){
			}
		});
	}
	
	// password keyboard
	$('#LoginForm_employer_id, #LoginForm_password').click(function(){
		$(this).parent('.row').append(keyboard);
		$('#keyboard').slideToggle(300);
	});

	$('#keyboard span').click(function(){
		var className = $(this).attr('class');
		var inputPos = $(this).parent('#keyboard').siblings('input');
		switch (className) {
			case 'number':
				var value = $(this).html();
				inputPos.val(inputPos.val() + value);
				break;
			case 'delete':
				var str = inputPos.val();
				var newStr = str.substring(0, str.length-1);
				inputPos.val(newStr);
				break;
			case 'removeAll':
				inputPos.val('');
				break;
			case 'confirm':
				keyboard.slideUp();
				break;
			default:
				keyboard.slideUp();
				break;
		}
		
	});

	");
?>