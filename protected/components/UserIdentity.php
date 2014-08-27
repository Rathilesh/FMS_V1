<?php
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id; //  declre as private
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        //get username and password to enter user
        $pvUsername = $this->username;
        $pvPassword = md5($this->password);

        $ArGet_User_Result = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from("loginaction('{$pvUsername}','{$pvPassword}')")
                        ->queryAll();

        //print_r($ArGet_User_Result) ; exit;
        if(!empty($ArGet_User_Result[0]['pvuserid'])) {
            $this->_id       =$ArGet_User_Result[0]['pvuserid'];
            $this->setState('user', $ArGet_User_Result[0]['pvusername']);
            $this->errorCode =self::ERROR_NONE;
            return !$this->errorCode;
        }
        else 
            {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            //echo "Some problems found Plz check your username or password ";
            }
                       
    }
    public function getId()
    {
        return $this->_id;
    }
}