<?php

class EmployerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1_employer';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('logout', 'home','login', 'getSerialID', 'updatePrintStatus', 'changepassword', 'changeok'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('logout','index', 'salary', 'getSerialID', 'updatePrintStatus', 'changepassword', 'changeok'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionHome(){
		$this->render('home',array());
	}
	

	public function actionChangeok($msg) {
		$this->render('changeok', array('msg'=>$msg));
	}


	public function actionIndex($employer_id)
	{
		
		$criteria=new CDbCriteria(array(
			'order'=>'salary_date DESC',
			'limit'=> 12,
		));
		$criteria->compare('employer_id', $employer_id);

		$dataProvider=new CActiveDataProvider('Salary', array(
			'criteria'=>$criteria,
			'pagination'=>false,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionSalary($employer_id, $salary_date)
	{
		$model = Salary::model()->findByPk(array('employer_id'=>$employer_id, 'salary_date'=>$salary_date));
		
		$this->renderPartial('salary', array(
				'model'=>$model,
			));
	}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('employer/index', 'employer_id'=>$model->employer_id));
		//		$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Get the Serial ID
	 **/
	public function actionGetSerialID()
	{
		$model = Serial::model()->findByPk(array('unused_id' => 1));
		header("Content->type: application/json");
		echo CJSON::encode($model);
		$model->id = "guodegang";
		$model->save();
		Yii::app()->end();
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		if (!Yii::app()->user->isGuest) {
			Yii::app()->user->logout();
		}

		$this->redirect(Yii::app()->createUrl("employer/home",array()));
	}

	public function actionChangepassword($employer_id)
	 {      
	    $model = new User;
	 
	    $model = User::model()->findByAttributes(array('employer_id'=>$employer_id));
	    $model->setScenario('changePwd');
	 
	 
	     if(isset($_POST['User'])){
	        $model->attributes = $_POST['User'];
	        $valid = $model->validate();
	 
	        if($valid){
	          $model->password = $model->new_password;
	          if($model->save())
	           		$this->redirect(array('changeok','msg'=>'1')); 
	          else
	           		$this->redirect(array('changeok','msg'=>'0'));
	          }
	       }
	 
	    $this->render('changepassword',array('model'=>$model)); 
	 }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}