SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- 数据库: `salary`
--
CREATE DATABASE IF NOT EXISTS `salary` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `salary`;


--
-- 表的结构 `tbl_serial`
--

CREATE TABLE IF NOT EXISTS `tbl_serial` (
  `unused_id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id` varchar(100) COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tbl_serial`
--

INSERT INTO `tbl_serial` (`id`) VALUES
('0012348');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_id`
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
	employer_id VARCHAR(128) NOT NULL PRIMARY KEY,
	ic_num VARCHAR(128) NOT NULL,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	position VARCHAR(128) NOT NULL,
	department VARCHAR(128) NOT NULL,
	locked INTEGER NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_user` (`username`, `password`, `employer_id`, `ic_num`, `position`, `department`, `locked`) VALUES 
('admin','$2y$13$R2hOrTcomYhaRDaegODQe.yg/tSpfSR5YXbHCcoFlTByhQrojWw1W','admin', '1234512345', '管理员', '总裁办公室', 0),
('李秘书','$2y$13$R2hOrTcomYhaRDaegODQe.yg/tSpfSR5YXbHCcoFlTByhQrojWw1W','0012345', '1234512345', '管理员', '总裁办公室', 0),
('王主任','$2y$13$R2hOrTcomYhaRDaegODQe.yg/tSpfSR5YXbHCcoFlTByhQrojWw1W','0012346', '2894130385', '管理员', '销售部', 0),
('郭德纲','$2y$13$R2hOrTcomYhaRDaegODQe.yg/tSpfSR5YXbHCcoFlTByhQrojWw1W','0012347', '1234512347', '管理员', '市场部', 0),
('于谦','$2y$13$R2hOrTcomYhaRDaegODQe.yg/tSpfSR5YXbHCcoFlTByhQrojWw1W','0012348', '1234512348', '管理员', '研发部', 0);

CREATE TABLE tbl_salary
(
	employer_id VARCHAR(128) NOT NULL,
	salary_date date DEFAULT NULL,
	
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
	
	/*工资1.5倍、加班1.5倍(小时)*/
	salary_x1 FLOAT DEFAULT 0.0,
	salary_x1_hour FLOAT DEFAULT 0.0,
	/*工资2倍、加班2倍(小时)*/
	salary_x2 FLOAT DEFAULT 0.0,
	salary_x2_hour FLOAT DEFAULT 0.0,
	/*工资3倍、加班3倍(小时)*/
	salary_x3 FLOAT DEFAULT 0.0,
	salary_x3_hour FLOAT DEFAULT 0.0,
	
	/*全勤奖、技能津贴、生产奖励、夜班津贴、特岗补贴、住房补贴*/
	/*年资奖金、过节费、高温补贴、其他收入、年终奖金、*/
	award_quanqin FLOAT DEFAULT 0.0,
	award_jineng FLOAT DEFAULT 0.0,
	award_shengchang FLOAT DEFAULT 0.0,
	award_yeban FLOAT DEFAULT 0.0,
	award_tegang FLOAT DEFAULT 0.0,
	award_zhufang FLOAT DEFAULT 0.0,
	award_nianzi FLOAT DEFAULT 0.0,
	award_guojie FLOAT DEFAULT 0.0,
	award_gaowen FLOAT DEFAULT 0.0,
	award_qita FLOAT DEFAULT 0.0,
	award_nianzhong FLOAT DEFAULT 0.0,
	
	/*其他调整项-税前、其他调整项-税后*/
	tiaozhengqian FLOAT DEFAULT 0.0,
	tiaozhenghou  FLOAT DEFAULT 0.0,
	
	/*总扣款*/
	total_debit FLOAT DEFAULT 0.0,
	
	/*年假扣款、公司放假扣款、婚假扣款、产假扣款*/
	debit_nianjia FLOAT DEFAULT 0.0,
	hours_nianjia FLOAT DEFAULT 0.0,
	debit_gongsifangjia FLOAT DEFAULT 0.0,
	hours_gongsifangjia FLOAT DEFAULT 0.0,
	debit_hunjia FLOAT DEFAULT 0.0,
	hours_hunjia FLOAT DEFAULT 0.0,
	debit_chanjia FLOAT DEFAULT 0.0,
	hours_chanjia FLOAT DEFAULT 0.0,
	/*丧假扣款、事假扣款、病假扣款、旷工扣款*/
	debit_sangjia FLOAT DEFAULT 0.0,
	hours_sangjia FLOAT DEFAULT 0.0,
	debit_shijia FLOAT DEFAULT 0.0,
	hours_shijia FLOAT DEFAULT 0.0,
	debit_bingjia FLOAT DEFAULT 0.0,
	hours_bingjia FLOAT DEFAULT 0.0,
	debit_kuanggong FLOAT DEFAULT 0.0,
	hours_kuanggong FLOAT DEFAULT 0.0,
	/*迟到早退扣款*/
	debit_chidaozaotui FLOAT DEFAULT 0.0,
	hours_chidaozaotui FLOAT DEFAULT 0.0,
	/*其他扣款*/
	debit_qita FLOAT DEFAULT 0.0,
	
	/*个人所得税*/
	personal_tax FLOAT DEFAULT 0.0,
	/*社保个人*/
	personal_insurance FLOAT DEFAULT 0.0,
	/*公积金个人*/
	personal_fund FLOAT DEFAULT 0.0,
	
	/*公司总成本*/
	company_tatal_cost FLOAT DEFAULT 0.0,
	/*社保公司*/
	company_insurance FLOAT DEFAULT 0.0,
	/*公积金公司*/
	company_fund FLOAT DEFAULT 0.0,

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

