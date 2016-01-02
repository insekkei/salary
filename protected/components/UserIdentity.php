<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;
	private $employer_id;

	/**
	 * Constructor.
	 * @param string $employer_id employer_id
	 * @param string $password password
	 */
	public function __construct($employer_id,$password)
	{
		$this->employer_id=$employer_id;
		$this->password=$password;
	}
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $user=User::model()->find('employer_id=?',array($this->employer_id));
        if($user===null){
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            echo "ddfdalkdfjalfd";
        }
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->employer_id;
            $this->employer_id=$user->employer_id;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
	}


	public function getId()
	{

		return $this->_id;
	}
}