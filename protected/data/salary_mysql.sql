SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- 数据库: `salary`
--
CREATE DATABASE IF NOT EXISTS `salary` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `salary`;



-- --------------------------------------------------------

-- 
-- 表的结构 ｀tbl_printer｀
-- --------------------------------------------------------
--

CREATE TABLE IF NOT EXISTS `tbl_printer` (
  `unused_id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id`  VARCHAR(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `total_length` INTEGER DEFAULT 0,
  `length` INTEGER NOT NULL DEFAULT 0,
  `printed` INTEGER NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据  `tbl_printer`
--

INSERT INTO `tbl_printer` (`id`, `name`, `total_length`, `length`, `printed`) VALUES
('123456', '打印机A', 2000, 10, 0),
('123457', '打印机B', 2000, 10, 0);



-- 
-- 表的结构 ｀tbl_id｀
-- --------------------------------------------------------
--

CREATE TABLE IF NOT EXISTS `tbl_id` (
  `unused_id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tbl_id`
--

INSERT INTO `tbl_id` (`id`, `date`) VALUES
('0012347', '2015-12-29 19:10:16'),
('0012345', '2015-12-29 19:10:26'),
('0012348', '2015-12-29 19:10:36');




CREATE TABLE tbl_user
(
	/*员工工号*/
	employer_id VARCHAR(128) NOT NULL PRIMARY KEY,
	/*IC Card*/
	ic_num VARCHAR(128) NOT NULL,
	/*员工姓名*/
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	position VARCHAR(128) NOT NULL,
	/*部门*/
	department VARCHAR(128) NOT NULL,
	/*身份证后6位*/
	id_six VARCHAR(20) NOT NULL,

	locked INTEGER NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_user` (`username`, `password`, `employer_id`, `ic_num`, `position`, `department`, `id_six`, `locked`) VALUES 
('admin','123456','admin', '1234512345', '管理员', '总裁办公室', '123456',0),
('李秘书','123456','0012345', '1234512345', '管理员', '总裁办公室', '123456',0),
('王主任','123456','0012346', '2894130385', '管理员', '销售部', '123456',0),
('郭德纲','123456','0012347', '1234512347', '管理员', '市场部', '123456', 0),
('于谦','123456','0012348', '1234512348', '管理员', '研发部', '123456', 0);

CREATE TABLE tbl_salary
(
	/*员工工号*/
	employer_id VARCHAR(128) NOT NULL,

	/*发薪周期*/
	salary_date date DEFAULT NULL,
	/*发薪周期开始日期*/
	salary_date_start date DEFAULT NULL,
	/*发薪周期结束日期*/
	salary_date_end date DEFAULT NULL,


	
	/*是否已经打印*/
	print_status INTEGER NOT NULL DEFAULT 0,
	
	/*总收入*/
	total_salary FLOAT DEFAULT 0.0,
	/*实发工资*/
	total_pay FLOAT DEFAULT 0.0,
	
	/*基本工资、工作小时数，小时工资*/
	basic_salary FLOAT DEFAULT 0.0,
	basic_hours FLOAT DEFAULT 0.0,
	hour_salary FLOAT DEFAULT 0.0,

	/*折算后基本工资*/
	basic_salary_off FLOAT DEFAULT 0.0,
	
	/*工资1.5倍、加班1.5倍(小时)*/
	salary_x1 FLOAT DEFAULT 0.0,
	salary_x1_hour FLOAT DEFAULT 0.0,
	/*工资2倍、加班2倍(小时)*/
	salary_x2 FLOAT DEFAULT 0.0,
	salary_x2_hour FLOAT DEFAULT 0.0,
	/*工资3倍、加班3倍(小时)*/
	salary_x3 FLOAT DEFAULT 0.0,
	salary_x3_hour FLOAT DEFAULT 0.0,
	

	award_quanqin FLOAT DEFAULT 0.0, /*全勤奖*/
	award_jineng FLOAT DEFAULT 0.0,  /*技能津贴*/
	award_shengchang FLOAT DEFAULT 0.0, /*生产奖金*/
	award_yeban FLOAT DEFAULT 0.0,  /*夜班津贴*/
	award_tegang FLOAT DEFAULT 0.0,  /*特岗补贴*/
	award_zhufang FLOAT DEFAULT 0.0,  /*住房补贴*/
	award_nianzi FLOAT DEFAULT 0.0,   /*忠诚奖*/
	award_guojie FLOAT DEFAULT 0.0,  /*节日奖金*/
	award_gaowen FLOAT DEFAULT 0.0,  /*高温补贴*/
	award_qita FLOAT DEFAULT 0.0,   /*其他补贴 */
	award_nianzhong FLOAT DEFAULT 0.0,  /*年终奖金*/
	
	/*税前调整项-补*/
	tiaozhengqian FLOAT DEFAULT 0.0,
	/*税后补贴*/
	tiaozhenghou  FLOAT DEFAULT 0.0,
	
	/*总扣款*/
	total_debit FLOAT DEFAULT 0.0,

	/*缺勤扣款*/
	debit_queqin FLOAT DEFAULT 0.0,
	/*税后扣款*/
	debit_shuihou FLOAT DEFAULT 0.0,
	/*税前调整项-扣*/
	debit_shuiqian_tiaozheng FLOAT DEFAULT 0.0,
	
	/*年假扣款、公司放假扣款、婚假扣款、产假扣款*/
	debit_nianjia FLOAT DEFAULT 0.0,   /*年假小时数*/
	hours_nianjia FLOAT DEFAULT 0.0,
	debit_gongsifangjia FLOAT DEFAULT 0.0, 
	hours_gongsifangjia FLOAT DEFAULT 0.0, /*公司放假小时数*/
	debit_hunjia FLOAT DEFAULT 0.0,  
	hours_hunjia FLOAT DEFAULT 0.0,  /*婚假小时数*/
	debit_chanjia FLOAT DEFAULT 0.0,
	hours_chanjia FLOAT DEFAULT 0.0,  /*产假小时数*/
	/*丧假扣款、事假扣款、病假扣款、旷工扣款*/
	debit_sangjia FLOAT DEFAULT 0.0,  
	hours_sangjia FLOAT DEFAULT 0.0, /*丧假小时数*/
	debit_shijia FLOAT DEFAULT 0.0,   
	hours_shijia FLOAT DEFAULT 0.0,  /*事假小时数*/
	debit_bingjia FLOAT DEFAULT 0.0,
	hours_bingjia FLOAT DEFAULT 0.0,  /*病假小时数*/
	debit_kuanggong FLOAT DEFAULT 0.0,
	hours_kuanggong FLOAT DEFAULT 0.0,  /*旷工小时数*/

	hours_buxiu FLOAT DEFAULT 0.0, /*补休小时数	*/
	hours_chuchai FLOAT DEFAULT 0.0, /*出差小时数	*/
	hours_gongshangjia FLOAT DEFAULT 0.0, /*工伤假小时数	*/
	hours_jiaban_queqin FLOAT DEFAULT 0.0, /*固定加班缺勤小时数*/

	/*迟到早退扣款*/
	debit_chidaozaotui FLOAT DEFAULT 0.0,
	hours_chidaozaotui FLOAT DEFAULT 0.0,  /*迟到早退小时数*/

	/*其他扣款*/
	debit_qita FLOAT DEFAULT 0.0,
	
	/*工资个人所得税*/
	personal_tax FLOAT DEFAULT 0.0,
	/*社保个人*/
	personal_insurance FLOAT DEFAULT 0.0,
	/*公积金个人*/
	personal_fund FLOAT DEFAULT 0.0,
	/*奖金税个人*/
	personal_award_tax FLOAT DEFAULT 0.0,

	/*公司总成本*/
	company_tatal_cost FLOAT DEFAULT 0.0,
	/*社保公司*/
	company_insurance FLOAT DEFAULT 0.0,
	/*公积金公司*/
	company_fund FLOAT DEFAULT 0.0,
	/*奖金税公司*/
	company_award_tax FLOAT DEFAULT 0.0,

	PRIMARY KEY(employer_id, salary_date),
	CONSTRAINT FK_salary_user FOREIGN KEY (employer_id)
		REFERENCES tbl_user (employer_id) ON DELETE CASCADE ON UPDATE RESTRICT
	
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_salary` (`employer_id`, `salary_date`) VALUES
('0012345','2016-1-1'),
('0012345','2015-11-1'),
('0012345','2015-12-1'),
('0012345','2015-10-1'),
('0012345','2015-09-1'),
('0012345','2015-08-1'),
('0012345','2015-07-1'),
('0012345','2015-06-1'),
('0012345','2015-05-1'),

('0012346','2016-1-1'),
('0012346','2015-11-1'),
('0012346','2015-12-1'),
('0012346','2015-10-1'),
('0012346','2015-09-1'),
('0012346','2015-08-1'),
('0012346','2015-07-1'),
('0012346','2015-06-1'),
('0012346','2015-05-1'),

('0012347','2016-1-1'),
('0012347','2015-11-1'),
('0012347','2015-12-1'),
('0012347','2015-10-1'),
('0012347','2015-09-1'),
('0012347','2015-08-1'),
('0012347','2015-07-1'),
('0012347','2015-06-1'),
('0012347','2015-05-1'),

('0012348','2016-1-1'),
('0012348','2015-11-1'),
('0012348','2015-12-1'),
('0012348','2015-10-1'),
('0012348','2015-09-1'),
('0012348','2015-08-1'),
('0012348','2015-07-1'),
('0012348','2015-06-1'),
('0012348','2015-05-1');

