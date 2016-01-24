<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $employer_id
 * @property string $ic_num
 * @property string $username
 * @property string $password
 * @property string $position
 * @property string $department
 * @property integer $locked
 *
 * The followings are the available model relations:
 * @property Salary[] $salaries
 */
class User extends CActiveRecord
{

	public $old_password;
    public $new_password;
    public $repeat_password;

    private $_identity;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('employer_id, ic_num, username, password, position, department', 'required'),
			array('locked', 'numerical', 'integerOnly'=>true),
		//	array('employer_id, ic_num, username, password, position, department', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('employer_id, ic_num, username, password, position, department, locked', 'safe', 'on'=>'search'),
			array('old_password, new_password, repeat_password', 'required', 'on' => 'changePwd'),
       		array('old_password', 'findPasswords', 'on' => 'changePwd'),
        	array('repeat_password', 'compare', 'compareAttribute'=>'new_password', 'on'=>'changePwd'),

		);
	}

    //matching the old password with your existing password.
    public function findPasswords($attribute, $params)
    {
    	$this->_identity=new UserIdentity($this->employer_id,$this->old_password);
		if(!$this->_identity->authenticate())
				$this->addError($attribute, '旧密码错误');
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'salaries' => array(self::HAS_MANY, 'Salary', 'employer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'employer_id' => '工号',
			'ic_num' => 'IC卡号',
			'username' => '用户名',
			'password' => '密码',
			'position' => '职位',
			'department' => '部门',
			'locked' => '是否锁定',
			'old_password' => '旧密码',
			'new_password' => '新密码',
			'repeat_password' => '再输入一次新密码',
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
		$criteria->compare('ic_num',$this->ic_num,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('locked',$this->locked);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}
	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}

	protected function beforeSave()
	{
	    if(parent::beforeSave())
	    {
	        $this->password=$this->hashPassword($this->password);
	        return true;
	    }
	    else
	        return false;
	}
}
