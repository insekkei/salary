<?php

/**
 * This is the model class for table "{{printer}}".
 *
 * The followings are the available columns in table '{{printer}}':
 * @property integer $unused_id
 * @property string $id
 * @property string $name
 * @property integer $total_length
 * @property integer $length
 * @property integer $printed
 */
class Printer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{printer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name', 'required'),
			array('total_length, length, printed', 'numerical', 'integerOnly'=>true),
			array('id', 'length', 'max'=>128),
			array('name', 'length', 'max'=>100),
			array('emails', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('unused_id, id, name, total_length, length, printed, emails', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'unused_id' => '未使用',
			'id' => '打印机ID',
			'name' => '打印机名称',
			'total_length' => '纸盘总长度（cm）',
			'length' => '单张打印长度（cm）',
			'printed' => '已打印张数',
			'emails' => '通知邮箱',
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

		$criteria->compare('unused_id',$this->unused_id);
		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('total_length',$this->total_length);
		$criteria->compare('length',$this->length);
		$criteria->compare('printed',$this->printed);
		$criteria->compare('emails',$this->emails,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Printer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
