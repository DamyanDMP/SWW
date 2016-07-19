<?php

use Yee\Managers\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $data = array();

        $table = "sww";
        $servername = "localhost";
        $username = "root";
        $password = "";


        $app->render('pages/login.tpl', $data );
    }

    /**
     * @Route('/:login2')
     * @Name('login.index')
     * @Method('post')
     */
    public function postAction( )
    {

        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post("loginEmail");
        $password = $app->request()->post("loginPassword");

        $app->db['default']->where ("email", $email);
        $user = $app->db['default']->getOne ("users");

        if($user != null){
            if($password == $user["Password"]){
                echo "Login successful";
                echo "Login successful";
                echo "Login successful";
                $app->render('pages/login.tpl');
                die;
            }
            else{
                echo "wrong password";
                $app->render('pages/login.tpl');
                die;
            }
        }
        else{
            echo "not a user";
            $app->render('pages/login.tpl');
            die;
        }

        $data = array();

        //$loginModel = new LoginModel($email, $password);

        //$singupModel = new SingupModel($email, $password, $password1);
        $app->render('pages/login.tpl', $data );

    }
}