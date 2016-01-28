<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\base\ErrorException;
require Yii::getAlias('@vendor') .'/adldap/adLDAP/src/adLDAP.php';


/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    /*public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }*/
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUserAd();
        if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Не правильное имя ИЛИ пароль.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        $authUser = \Yii::$app->ldap->authenticate($this->username, $this->password);

        if ($authUser or $this->username =='admin') {
            if ($this->validate())
            return Yii::$app->user->login($this->getUserAd(), $this->rememberMe ? 3600 * 24 * 30 : 0);
               }
        return false;
    }
    /*public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }
*/

    protected function getUserAd()
    {
        if ($this->_user === null) {
            if(!$this->_user = User::findByUsername($this->username)){
                $result = \Yii::$app->ldap->user()->infoCollection($this->username, array("*"));
                $user = new User();
                $user->username = $this->username;
                $user->email =$result->mail;
                $user->setPassword($this->password);
                $user->generateAuthKey();
                if (!$user->save()) {
                    throw new ErrorException('Не удалось сохранить данные в базу');
                }
                $this->_user =  $user;
            };
        }

        return $this->_user;
    }
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
/**
 *public static function findByUsername($username)
{
return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
}
 * $result = $adldap->user()->infoCollection("tolkushkin", array("*"));
echo "<br>";
echo $result->displayName;
echo "<br>";
echo $result->title;
echo "<br>";
echo $result->mail;
echo "<br>";
echo $result->department;
echo "<br>";
echo $result->samaccountname;
echo "<br>";
*/
