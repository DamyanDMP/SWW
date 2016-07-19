<?php
namespace App\Models\Singup;

use Yee\Yee;

Class SingupModel
{
    private $email;
    private $password;
    private $password1;

    public function __construct($email, $pass, $passConf)
    {
        $this->app=Yee::getInstance();
        $this->email = $email;
        $this->password = $pass;
        $this->password1 = $passConf;
    }

    //var_dump($app->db['default']->get('users'));
    public function validateEmail($email){
        $email = trim($email);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return true;
        } else {
            return false;
        }
    }
    public  function validatePass($password, $password1){
        $pass = trim($password);
        $confPass = trim($password1);

        if((strlen($pass) <21) && (strlen($pass)>5)) {
            if($pass == $confPass){
                if(!preg_match("/[^A-za-z0-9]/",$pass)){
                    return true;
                } else{
                    echo "Have not correct symbols!";
                    return false;
                }
            } else {
                echo "Passwords are not with same length!";
                return false;
            }
        } else {
            echo "Must be between 6 and 20 symbols!";
            return false;
        }
    }
    public function checkDB(){
        $app=\Yee\Yee::getInstance();
        if($app->db['default']->where('email', $this->email)->getOne('users') == null){
            return false;
        } else {
            return true;
        }
    }
    public function validate()
    {
        if (!$this->validateEmail($this->email)) {
            return false;
        }
        if (!$this->validatePass($this->password, $this->password1)) {
            return false;
        }
        return true;
    }
    public function register(){
        if(true) {
            $app = \Yee\Yee::getInstance();
            $db = $app->db['default'];
            $db->insert("users", array(
                "Email" => $this->email,
                "Password" => $this->password,
                "Active" => 15,
                "SignupDate" => "2016-10-10 : 00:00:00",
                "Ip" => "213:234:234:324"
            ));
        }
    }
    
    
}