<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>
<div class="view <?php  

 				if ((CHtml::encode($data->print_status) == '0') == 1) {
 					echo " print";
 				}
 				else {
 					echo " ";
 				}

 			?>">

	<div class="salary-date">
		<time>日期</time>
		<span><?php echo CHtml::encode($data->salary_date); ?></span>
		<?php echo CHtml::link(CHtml::encode($data->salary_date), array('salary', 'employer_id'=>$data->employer_id, 'salary_date'=>$data->salary_date)); ?>
	</div>
</div>
<?php
Yii::app()->clientScript->registerScript('querySalary', "
	$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
	    options.async = true;
	});

	// 初始化
    var firstUrl = $('.salary-list .view:first-child a').attr('href');
	$('#month-details').load(firstUrl, function() {
		var date = $('.salary-list .view:first-child time').html();
		print();
		$('#month-print').html(date);
	});
	
	// 加载选中月份工资单
	$('.salary-list .view').bind('click', function(){
		var thisObj = $(this);
		var url = thisObj.find('.salary-date').children('a').attr('href');
		var date = thisObj.find('time').html();
		thisObj.addClass('current').siblings().removeClass('current');
		$('#month-details').load(url, function(){
			$('#month-print').html(date);
			print();
		});
	});
	
	// 更改打印状态
	function print() {
		$('.print-button0').bind('click', function(e){
			var url = $(this).attr('href');
			var employerId = url.split('&')[1].split('=')[1];
			var salaryDate = url.split('&')[2].split('=')[1];
			var param = String(employerId) + '_' + String(salaryDate);
			// $.get(url, function(result){
				PrintSalary(url, param);
				// window.location.reload();
			// });
			e.preventDefault();
		});
	}

	// 修改月份格式
	$('.salary-date').each(function(){
		var thisObj = $(this);
		var date = new Date(thisObj.find('span').html());
		var year = date.getFullYear();
		var month = date.getMonth() + 1;
		date = year + '年' + month + '月';
		thisObj.children('time').html(date);
	});");

	
?>

