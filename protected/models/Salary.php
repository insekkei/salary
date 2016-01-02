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
			array('total_salary, total_pay, basic_salary, basic_hours, hour_salary, salary_x1, salary_x1_hour, salary_x2, salary_x2_hour, salary_x3, salary_x3_hour, award_quanqin, award_jineng, award_shengchang, award_yeban, award_tegang, award_zhufang, award_nianzi, award_guojie, award_gaowen, award_qita, award_nianzhong, tiaozhengqian, tiaozhenghou, total_debit, debit_nianjia, hours_nianjia, debit_gongsifangjia, hours_gongsifangjia, debit_hunjia, hours_hunjia, debit_chanjia, hours_chanjia, debit_sangjia, hours_sangjia, debit_shijia, hours_shijia, debit_bingjia, hours_bingjia, debit_kuanggong, hours_kuanggong, debit_chidaozaotui, hours_chidaozaotui, debit_qita, personal_tax, personal_insurance, personal_fund, company_tatal_cost, company_insurance, company_fund', 'numerical'),
			array('employer_id', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('employer_id, salary_date, print_status, total_salary, total_pay, basic_salary, basic_hours, hour_salary, salary_x1, salary_x1_hour, salary_x2, salary_x2_hour, salary_x3, salary_x3_hour, award_quanqin, award_jineng, award_shengchang, award_yeban, award_tegang, award_zhufang, award_nianzi, award_guojie, award_gaowen, award_qita, award_nianzhong, tiaozhengqian, tiaozhenghou, total_debit, debit_nianjia, hours_nianjia, debit_gongsifangjia, hours_gongsifangjia, debit_hunjia, hours_hunjia, debit_chanjia, hours_chanjia, debit_sangjia, hours_sangjia, debit_shijia, hours_shijia, debit_bingjia, hours_bingjia, debit_kuanggong, hours_kuanggong, debit_chidaozaotui, hours_chidaozaotui, debit_qita, personal_tax, personal_insurance, personal_fund, company_tatal_cost, company_insurance, company_fund', 'safe', 'on'=>'search'),
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
			'employer_id' => 'Employer',
			'salary_date' => 'Salary Date',
			'print_status' => 'Print Status',
			'total_salary' => 'Total Salary',
			'total_pay' => 'Total Pay',
			'basic_salary' => 'Basic Salary',
			'basic_hours' => 'Basic Hours',
			'hour_salary' => 'Hour Salary',
			'salary_x1' => 'Salary X1',
			'salary_x1_hour' => 'Salary X1 Hour',
			'salary_x2' => 'Salary X2',
			'salary_x2_hour' => 'Salary X2 Hour',
			'salary_x3' => 'Salary X3',
			'salary_x3_hour' => 'Salary X3 Hour',
			'award_quanqin' => 'Award Quanqin',
			'award_jineng' => 'Award Jineng',
			'award_shengchang' => 'Award Shengchang',
			'award_yeban' => 'Award Yeban',
			'award_tegang' => 'Award Tegang',
			'award_zhufang' => 'Award Zhufang',
			'award_nianzi' => 'Award Nianzi',
			'award_guojie' => 'Award Guojie',
			'award_gaowen' => 'Award Gaowen',
			'award_qita' => 'Award Qita',
			'award_nianzhong' => 'Award Nianzhong',
			'tiaozhengqian' => 'Tiaozhengqian',
			'tiaozhenghou' => 'Tiaozhenghou',
			'total_debit' => 'Total Debit',
			'debit_nianjia' => 'Debit Nianjia',
			'hours_nianjia' => 'Hours Nianjia',
			'debit_gongsifangjia' => 'Debit Gongsifangjia',
			'hours_gongsifangjia' => 'Hours Gongsifangjia',
			'debit_hunjia' => 'Debit Hunjia',
			'hours_hunjia' => 'Hours Hunjia',
			'debit_chanjia' => 'Debit Chanjia',
			'hours_chanjia' => 'Hours Chanjia',
			'debit_sangjia' => 'Debit Sangjia',
			'hours_sangjia' => 'Hours Sangjia',
			'debit_shijia' => 'Debit Shijia',
			'hours_shijia' => 'Hours Shijia',
			'debit_bingjia' => 'Debit Bingjia',
			'hours_bingjia' => 'Hours Bingjia',
			'debit_kuanggong' => 'Debit Kuanggong',
			'hours_kuanggong' => 'Hours Kuanggong',
			'debit_chidaozaotui' => 'Debit Chidaozaotui',
			'hours_chidaozaotui' => 'Hours Chidaozaotui',
			'debit_qita' => 'Debit Qita',
			'personal_tax' => 'Personal Tax',
			'personal_insurance' => 'Personal Insurance',
			'personal_fund' => 'Personal Fund',
			'company_tatal_cost' => 'Company Tatal Cost',
			'company_insurance' => 'Company Insurance',
			'company_fund' => 'Company Fund',
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
		$criteria->compare('total_salary',$this->total_salary);
		$criteria->compare('total_pay',$this->total_pay);
		$criteria->compare('basic_salary',$this->basic_salary);
		$criteria->compare('basic_hours',$this->basic_hours);
		$criteria->compare('hour_salary',$this->hour_salary);
		$criteria->compare('salary_x1',$this->salary_x1);
		$criteria->compare('salary_x1_hour',$this->salary_x1_hour);
		$criteria->compare('salary_x2',$this->salary_x2);
		$criteria->compare('salary_x2_hour',$this->salary_x2_hour);
		$criteria->compare('salary_x3',$this->salary_x3);
		$criteria->compare('salary_x3_hour',$this->salary_x3_hour);
		$criteria->compare('award_quanqin',$this->award_quanqin);
		$criteria->compare('award_jineng',$this->award_jineng);
		$criteria->compare('award_shengchang',$this->award_shengchang);
		$criteria->compare('award_yeban',$this->award_yeban);
		$criteria->compare('award_tegang',$this->award_tegang);
		$criteria->compare('award_zhufang',$this->award_zhufang);
		$criteria->compare('award_nianzi',$this->award_nianzi);
		$criteria->compare('award_guojie',$this->award_guojie);
		$criteria->compare('award_gaowen',$this->award_gaowen);
		$criteria->compare('award_qita',$this->award_qita);
		$criteria->compare('award_nianzhong',$this->award_nianzhong);
		$criteria->compare('tiaozhengqian',$this->tiaozhengqian);
		$criteria->compare('tiaozhenghou',$this->tiaozhenghou);
		$criteria->compare('total_debit',$this->total_debit);
		$criteria->compare('debit_nianjia',$this->debit_nianjia);
		$criteria->compare('hours_nianjia',$this->hours_nianjia);
		$criteria->compare('debit_gongsifangjia',$this->debit_gongsifangjia);
		$criteria->compare('hours_gongsifangjia',$this->hours_gongsifangjia);
		$criteria->compare('debit_hunjia',$this->debit_hunjia);
		$criteria->compare('hours_hunjia',$this->hours_hunjia);
		$criteria->compare('debit_chanjia',$this->debit_chanjia);
		$criteria->compare('hours_chanjia',$this->hours_chanjia);
		$criteria->compare('debit_sangjia',$this->debit_sangjia);
		$criteria->compare('hours_sangjia',$this->hours_sangjia);
		$criteria->compare('debit_shijia',$this->debit_shijia);
		$criteria->compare('hours_shijia',$this->hours_shijia);
		$criteria->compare('debit_bingjia',$this->debit_bingjia);
		$criteria->compare('hours_bingjia',$this->hours_bingjia);
		$criteria->compare('debit_kuanggong',$this->debit_kuanggong);
		$criteria->compare('hours_kuanggong',$this->hours_kuanggong);
		$criteria->compare('debit_chidaozaotui',$this->debit_chidaozaotui);
		$criteria->compare('hours_chidaozaotui',$this->hours_chidaozaotui);
		$criteria->compare('debit_qita',$this->debit_qita);
		$criteria->compare('personal_tax',$this->personal_tax);
		$criteria->compare('personal_insurance',$this->personal_insurance);
		$criteria->compare('personal_fund',$this->personal_fund);
		$criteria->compare('company_tatal_cost',$this->company_tatal_cost);
		$criteria->compare('company_insurance',$this->company_insurance);
		$criteria->compare('company_fund',$this->company_fund);

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
}
