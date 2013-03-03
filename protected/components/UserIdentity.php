<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	
	private $_id;

 	public function authenticate(){
        $user = User::model()->findByAttributes(array('username'=>$this->username,'password'=>$this->password));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($user->password!==$user->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $this->_id=$user->user_id;
            Yii::app()->session['var'] = $this->_id;
            $user_info = new Login_info;
            $user_info->user_id=$this->_id;
            $user_info->login_time=new CDbExpression('NOW()');
            $user_info->save();
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

	public function getId(){
     return $this->_id;
     $id=Yii::app()->user->user_id;
     //$username=Yii::app()->user->username;
    }
}