<?php

use Yee\Managers\Controller\Controller;
use App\Models\Singup\SingupModel;

class SignupController extends Controller
{
     /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        //var_dump($app->db['default']->get('users'));
        //var_dump($app->db['default']->where("username", $username));
        $table = "sww";
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $table);
        $result = mysqli_query($conn, "SELECT * FROM users");

//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        } else {
//            echo "Connected successfully";
//            foreach ($result as $item){
//                var_dump($item);
//
//            }
//        }
        $data = array("variable"=>"");

        $app->render('pages/signup.tpl', $data );

    }



    /**
     * @Route('/:signup2')
     * @Name('post.index')
     * @Method('post')
     */
    public function postAction( )
    {
        
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $data = array();

        $email = $app->request()->post('email');
        $password = $app->request()->post('password');
        $password1 = $app->request()->post('confirm');

        $singupModel = new SingupModel($email, $password, $password1);
        
        if(!$singupModel->validate()){
            $error = "Invalid: email/password";
            $app->render('pages/textAreaNo.tpl', $data );
            echo "Invalid: email/password";
        }

        else if(!$singupModel->checkDB()){
            $singupModel->register();
                echo "Successfull!";
        } else {
            echo "Already have it!";
        }
//        if(!defined($error)){
//            $singupModel->register();
//        }
       // $app->render('pages/signup.tpl', array("error"=>$error));


        
//        if($singupModel->validateEmail($email))
//        {
//            echo "Validate Email! <br>";
//        } else {
//            echo "Invalid Email! <br>";
//        }
//        if($singupModel->validatePass($password, $password1)){
//            echo "Correct Password!";
//        }
       //$app->render('pages/signup.tpl', $data );

    }
    
}