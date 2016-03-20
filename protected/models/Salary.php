<?php

/**
 * This is the model class for table "{{salary}}".
 *
 * The followings are the available columns in table '{{salary}}':
 * @property string $employer_id
 * @property string $salary_date
 * @property integer $print_status
 * @property double $total_salary
 * @property double $total_pay
 * @property double $basic_salary
 * @property double $basic_hours
 * @property double $hour_salary
 * @property double $salary_x1
 * @property double $salary_x1_hour
 * @property double $salary_x2
 * @property double $salary_x2_hour
 * @property double $salary_x3
 * @property double $salary_x3_hour
 * @property double $award_quanqin
 * @property double $award_jineng
 * @property double $award_shengchang
 * @property double $award_yeban
 * @property double $award_tegang
 * @property double $award_zhufang
 * @property double $award_nianzi
 * @property double $award_guojie
 * @property double $award_gaowen
 * @property double $award_qita
 * @property double $award_nianzhong
 * @property double $tiaozhengqian
 * @property double $tiaozhenghou
 * @property double $total_debit
 * @property double $debit_nianjia
 * @property double $hours_nianjia
 * @property double $debit_gongsifangjia
 * @property double $hours_gongsifangjia
 * @property double $debit_hunjia
 * @property double $hours_hunjia
 * @property double $debit_chanjia
 * @property double $hours_chanjia
 * @property double $debit_sangjia
 * @property double $hours_sangjia
 * @property double $debit_shijia
 * @property double $hours_shijia
 * @property double $debit_bingjia
 * @property double $hours_bingjia
 * @property double $debit_kuanggong
 * @property double $hours_kuanggong
 * @property double $debit_chidaozaotui
 * @property double $hours_chidaozaotui
 * @property double $debit_qita
 * @property double $personal_tax
 * @property double $personal_insurance
 * @property double $personal_fund
 * @property double $company_tatal_cost
 * @property double $company_insurance
 * @property double $company_fund
 *
 * The followings are the available model relations:
 * @property User $employer
 */
class Salary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employer_id', 'required'),
			array('print_status', 'numerical', 'integerOnly'=>true),
			array('total_salary, total_pay, basic_salary, basic_hours, hour_salary, basic_salary_off, salary_x1, salary_x1_hour, salary_x2, salary_x2_hour, salary_x3, salary_x3_hour, award_quanqin, award_jineng, award_shengchang, award_yeban, award_tegang, award_zhufang, award_nianzi, award_guojie, award_gaowen, award_qita, award_nianzhong, tiaozhengqian, tiaozhenghou, total_debit, debit_queqin, debit_shuihou, debit_shuiqian_tiaozheng, debit_nianjia, hours_nianjia, debit_gongsifangjia, hours_gongsifangjia, debit_hunjia, hours_hunjia, debit_chanjia, hours_chanjia, debit_sangjia, hours_sangjia, debit_shijia, hours_shijia, debit_bingjia, hours_bingjia, debit_kuanggong, hours_kuanggong, hours_buxiu, hours_chuchai, hours_gongshangjia, hours_jiaban_queqin, debit_chidaozaotui, hours_chidaozaotui, debit_qita, personal_tax, personal_insurance, personal_fund, personal_award_tax, company_tatal_cost, company_insurance, company_fund, company_award_tax', 'numerical'),
			array('employer_id', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('employer_id, salary_date, salary_date_start, salary_date_end, print_status, total_salary, total_pay, basic_salary, basic_hours, hour_salary, basic_salary_off, salary_x1, salary_x1_hour, salary_x2, salary_x2_hour, salary_x3, salary_x3_hour, award_quanqin, award_jineng, award_shengchang, award_yeban, award_tegang, award_zhufang, award_nianzi, award_guojie, award_gaowen, award_qita, award_nianzhong, tiaozhengqian, tiaozhenghou, total_debit, debit_queqin, debit_shuihou, debit_shuiqian_tiaozheng, debit_nianjia, hours_nianjia, debit_gongsifangjia, hours_gongsifangjia, debit_hunjia, hours_hunjia, debit_chanjia, hours_chanjia, debit_sangjia, hours_sangjia, debit_shijia, hours_shijia, debit_bingjia, hours_bingjia, debit_kuanggong, hours_kuanggong, hours_buxiu, hours_chuchai, hours_gongshangjia, hours_jiaban_queqin, debit_chidaozaotui, hours_chidaozaotui, debit_qita, personal_tax, personal_insurance, personal_fund, personal_award_tax, company_tatal_cost, company_insurance, company_fund, company_award_tax', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'employer' => array(self::BELONGS_TO, 'User', 'employer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'employer_id' => '工号',
			'salary_date' => '发薪日期',
			'salary_date_start' => '发薪周期开始日期',
			'salary_date_end' => '发薪周期结束日期',
			'print_status' => '是否打印',
			'total_salary' => '总收入',
			'total_pay' => '实发工资',
			'basic_salary' => '基本工资',
			'basic_hours' => '工作小时数',
			'hour_salary' => '小时工资',
			'basic_salary_off' => '折算后基本工资',
			'salary_x1' => '工资1.5倍',
			'salary_x1_hour' => '加班1.5倍（小时）',
			'salary_x2' => '工资2倍',
			'salary_x2_hour' => '加班2倍（小时）',
			'salary_x3' => '工资3倍',
			'salary_x3_hour' => '加班3倍（小时）',
			'award_quanqin' => '全勤奖',
			'award_jineng' => '技能津贴',
			'award_shengchang' => '生产奖金',
			'award_yeban' => '夜班津贴',
			'award_tegang' => '特岗补贴',
			'award_zhufang' => '住房补贴',
			'award_nianzi' => '忠诚奖',
			'award_guojie' => '节日奖金',
			'award_gaowen' => '高温补贴',
			'award_qita' => '其他补贴',
			'award_nianzhong' => '年终奖金',
			'tiaozhengqian' => '税前调整项-补',
			'tiaozhenghou' => '税后补贴',
			'total_debit' => '总扣款',
			'debit_queqin' => '缺勤扣款',
			'debit_shuihou' => '税后扣款',
			'debit_shuiqian_tiaozheng' => '税前调整项-扣',
			'debit_nianjia' => '长期激励奖',
			'hours_nianjia' => '年假小时数',
			'debit_gongsifangjia' => '公司放假扣款',
			'hours_gongsifangjia' => '公司放假小时数',
			'debit_hunjia' => '婚假扣款',
			'hours_hunjia' => '婚假小时数',
			'debit_chanjia' => '产假扣款',
			'hours_chanjia' => '产假小时数',
			'debit_sangjia' => '丧假扣款',
			'hours_sangjia' => '丧假小时数',
			'debit_shijia' => '事假扣款',
			'hours_shijia' => '事假小时数',
			'debit_bingjia' => '病假扣款',
			'hours_bingjia' => '病假小时数',
			'debit_kuanggong' => '旷工扣款',
			'hours_kuanggong' => '旷工小时数',
			'hours_buxiu' => '补休小时数',
			'hours_chuchai' => '出差小时数',
			'hours_gongshangjia' => '工伤假小时数',
			'hours_jiaban_queqin' => '固定加班缺勤小时数',
			'debit_chidaozaotui' => '迟到早退扣款',
			'hours_chidaozaotui' => '迟到早退小时数',
			'debit_qita' => '其他扣款',
			'personal_tax' => '工资个人所得税',
			'personal_insurance' => '社保个人',
			'personal_fund' => '公积金个人',
			'personal_award_tax' => '奖金税个人',
			'company_tatal_cost' => '公司总成本',
			'company_insurance' => '社保公司',
			'company_fund' => '公积金公司',
			'company_award_tax' => '奖金税公司',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('employer_id',$this->employer_id,true);
		$criteria->compare('salary_date',$this->salary_date,true);
		$criteria->compare('print_status',$this->print_status);
		$criteria->compare('salary_date_start',$this->salary_date_start,true);
		$criteria->compare('salary_date_end',$this->salary_date_end,true);
		// $criteria->compare('total_salary',$this->total_salary);
		// $criteria->compare('total_pay',$this->total_pay);
		// $criteria->compare('basic_salary',$this->basic_salary);
		// $criteria->compare('basic_hours',$this->basic_hours);
		// $criteria->compare('hour_salary',$this->hour_salary);
		// $criteria->compare('salary_x1',$this->salary_x1);
		// $criteria->compare('salary_x1_hour',$this->salary_x1_hour);
		// $criteria->compare('salary_x2',$this->salary_x2);
		// $criteria->compare('salary_x2_hour',$this->salary_x2_hour);
		// $criteria->compare('salary_x3',$this->salary_x3);
		// $criteria->compare('salary_x3_hour',$this->salary_x3_hour);
		// $criteria->compare('award_quanqin',$this->award_quanqin);
		// $criteria->compare('award_jineng',$this->award_jineng);
		// $criteria->compare('award_shengchang',$this->award_shengchang);
		// $criteria->compare('award_yeban',$this->award_yeban);
		// $criteria->compare('award_tegang',$this->award_tegang);
		// $criteria->compare('award_zhufang',$this->award_zhufang);
		// $criteria->compare('award_nianzi',$this->award_nianzi);
		// $criteria->compare('award_guojie',$this->award_guojie);
		// $criteria->compare('award_gaowen',$this->award_gaowen);
		// $criteria->compare('award_qita',$this->award_qita);
		// $criteria->compare('award_nianzhong',$this->award_nianzhong);
		// $criteria->compare('tiaozhengqian',$this->tiaozhengqian);
		// $criteria->compare('tiaozhenghou',$this->tiaozhenghou);
		// $criteria->compare('total_debit',$this->total_debit);
		// $criteria->compare('debit_nianjia',$this->debit_nianjia);
		// $criteria->compare('hours_nianjia',$this->hours_nianjia);
		// $criteria->compare('debit_gongsifangjia',$this->debit_gongsifangjia);
		// $criteria->compare('hours_gongsifangjia',$this->hours_gongsifangjia);
		// $criteria->compare('debit_hunjia',$this->debit_hunjia);
		// $criteria->compare('hours_hunjia',$this->hours_hunjia);
		// $criteria->compare('debit_chanjia',$this->debit_chanjia);
		// $criteria->compare('hours_chanjia',$this->hours_chanjia);
		// $criteria->compare('debit_sangjia',$this->debit_sangjia);
		// $criteria->compare('hours_sangjia',$this->hours_sangjia);
		// $criteria->compare('debit_shijia',$this->debit_shijia);
		// $criteria->compare('hours_shijia',$this->hours_shijia);
		// $criteria->compare('debit_bingjia',$this->debit_bingjia);
		// $criteria->compare('hours_bingjia',$this->hours_bingjia);
		// $criteria->compare('debit_kuanggong',$this->debit_kuanggong);
		// $criteria->compare('hours_kuanggong',$this->hours_kuanggong);
		// $criteria->compare('debit_chidaozaotui',$this->debit_chidaozaotui);
		// $criteria->compare('hours_chidaozaotui',$this->hours_chidaozaotui);
		// $criteria->compare('debit_qita',$this->debit_qita);
		// $criteria->compare('personal_tax',$this->personal_tax);
		// $criteria->compare('personal_insurance',$this->personal_insurance);
		// $criteria->compare('personal_fund',$this->personal_fund);
		// $criteria->compare('company_tatal_cost',$this->company_tatal_cost);
		// $criteria->compare('company_insurance',$this->company_insurance);
		// $criteria->compare('company_fund',$this->company_fund);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function primaryKey() {
		return array('employer_id', 'salary_date');
	}

}
