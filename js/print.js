	var LODOP; //声明为全局变量  

	var url;
	var printResult;
	var t;
	function PrintSalary(printUrl, param) {	
		LODOP=getLodop();  
		url = printUrl;
		
		LODOP.PRINT_INITA(0,0,"80mm","12cm", param);
		LODOP.SET_PRINT_PAGESIZE(3, 800, "10mm", "");
		AddPrintContent();
//		LODOP.SET_PRINT_MODE("CATCH_PRINT_STATUS",true);
		LODOP.PRINT();
	  	//printResult = LODOP.PRINT();
	  	// var success = LODOP.GET_VALUE('PRINT_STATUS_OK', printResult);
	//  	if (printResult == true) {
	  	updateData();
	//  	}
	  	// LODOP.PREVIEW();
	};
	
	/*function waitFor () {
		t = setTimeout("waitFor()",1000);    
		if (LODOP.GET_VALUE("PRINT_STATUS_OK",printResult)) {
			clearTimeout(t);
			updateData();
			// alert("打印成功！");
		}if ((!LODOP.GET_VALUE("PRINT_STATUS_EXIST",printResult))) {
			clearTimeout(t);
			updateData();
			// alert("打印任务被删除！");
		} 
	}*/
	
	function updateData() {
		// 修改数据库中打印状态
  		$.get(url, function(result){
			window.location.reload();
		});

		// 修改后台打印机任务队列
		var printerLoc = LODOP.GET_SYSTEM_INFO('NetworkAdapter.1.PhysicalAddress');
  		$.get('/salary/index.php?r=printer/updateprinter&id=' + printerLoc);

	}

	function AddPrintContent() {
		var pr_map = {};
		$('.salarydetails dd').each(function(){
			var pr_name = $(this).attr('id');
			pr_map[pr_name] = $(this).html();
		});

		var currentDate = new Date();
		var year = currentDate.getFullYear();
		var month = currentDate.getMonth() + 1;
		var day = currentDate.getDate();
		var hour = currentDate.getHours();
		var minute = currentDate.getMinutes();
		var second = currentDate.getSeconds();
		var length = 200;
		var height = 25;
		var start = 60;
		var step = 12;
		var line = 0;

		LODOP.SET_PRINT_STYLE("FontColor","000");
		LODOP.SET_PRINT_STYLE("FontSize",12);
		LODOP.ADD_PRINT_LINE(50,"5mm",50,"75mm",2,1);
		LODOP.ADD_PRINT_LINE(470,"5mm",470,"75mm",2,1);
//		LODOP.ADD_PRINT_RECT("2.3cm","0.5cm","7cm","11cm",0,1);
		LODOP.ADD_PRINT_TEXT(10,30,250,height,"ECCO（厦门）有限公司 - 薪资单");
		LODOP.SET_PRINT_STYLE("FontSize",9);
		LODOP.ADD_PRINT_TEXT(33,120,250,height,"薪资月份：" + pr_map['month-print']);
		LODOP.SET_PRINT_STYLE("FontName","仿宋");
		LODOP.SET_PRINT_STYLE("FontSize",7);
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"工号：" + pr_map.pr_employer_id);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"部门：" + pr_map.pr_department);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"姓名：" + pr_map.pr_username);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"--实发工资：" + pr_map.pr_total_pay);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"（总收入-总扣款）");
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"--总收入：" + pr_map.pr_total_salary);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"");
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"基本工资：" + pr_map.pr_basic_salary);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"工作小时数：" + pr_map.pr_basic_hours);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"折算后基本工资：" + pr_map.pr_basic_salary_off);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"小时工资：" + pr_map.pr_hour_salary);
		line++;
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"工资1.5倍：" + pr_map.pr_salary_x1);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"加班1.5倍（小时）：" + pr_map.pr_salary_x1_hour);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"工资2倍：" + pr_map.pr_salary_x2);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"加班2倍（小时）：" + pr_map.pr_salary_x2_hour);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"工资3倍：" + pr_map.pr_salary_x3);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"加班3倍（小时）：" + pr_map.pr_salary_x3_hour);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"全勤奖：" + pr_map.pr_award_quanqin);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"技能津贴：" + pr_map.pr_award_jineng);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"生产奖金：" + pr_map.pr_award_shengchang);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"夜班津贴：" + pr_map.pr_award_yeban);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"特岗补贴：" + pr_map.pr_award_tegang);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"住房补贴：" + pr_map.pr_award_zhufang);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"忠诚奖：" + pr_map.pr_award_nianzi);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"节日奖金：" + pr_map.pr_award_guojie);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"高温补贴：" + pr_map.pr_award_gaowen);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"其他补贴：" + pr_map.pr_award_qita);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"年终奖金：" + pr_map.pr_award_nianzhong);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"税前调整项-补：" + pr_map.pr_tiaozhengqian);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"税后补贴：" + pr_map.pr_tiaozhenghou);
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"");
		line++;


		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"--总扣款：" + pr_map.pr_total_debit);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"缺勤扣款：" + pr_map.pr_debit_queqin);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"税后扣款：" + pr_map.pr_debit_shuihou);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"奖金税个人：" + pr_map.pr_personal_award_tax);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"税前调整项－扣：" + pr_map.pr_debit_shuiqian_tiaozheng);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"工资个人所得税：" + pr_map.pr_personal_tax);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"社保个人：" + pr_map.pr_personal_insurance);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"公积金个人：" + pr_map.pr_personal_fund);
		line++;
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"其它（假别单位：小时）：");
		line++;

		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"年假小时数：" + pr_map.pr_hours_nianjia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"病假小时数：" + pr_map.pr_hours_bingjia);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"公司放假小时数：" + pr_map.pr_hours_gongsifangjia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"旷工小时数：" + pr_map.pr_hours_kuanggong);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"婚假小时数：" + pr_map.pr_hours_hunjia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"迟到早退小时数：" + pr_map.pr_hours_chidaozaotui);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"产假小时数：" + pr_map.pr_hours_chanjia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"补休小时数：" + pr_map.pr_hours_buxiu);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"丧假小时数：" + pr_map.pr_hours_sangjia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"出差小时数：" + pr_map.pr_hours_chuchai);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"事假小时数：" + pr_map.pr_hours_shijia);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"工伤假小时数：" + pr_map.pr_hours_gongshangjia);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"固定加班缺勤小时数：" + pr_map.pr_hours_jiaban_queqin);
	
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"--公司总成本：" + pr_map.pr_company_tatal_cost);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"");
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,30,length,height,"社保公司：" + pr_map.pr_company_insurance);
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"公积金公司：" + pr_map.pr_company_fund);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step,150,length,height,"奖金税公司：" + pr_map.pr_company_award_tax);
		line++;
		LODOP.ADD_PRINT_TEXT(start+line*step+10,30,length,height,"日期：" + year + '/' + month + '/' + day);
		LODOP.ADD_PRINT_TEXT(start+line*step+10,150,length,height,"时间：" + hour + ':' + minute + ':' + second);
		line++;
	};