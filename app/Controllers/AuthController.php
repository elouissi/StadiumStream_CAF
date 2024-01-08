<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\User;
use MVC\Model\Verification;
use PHPMailer\PHPMailer\Exception;


class AuthController extends Controller
{

    function index(): void
    {
        // TODO: Implement index() method.
    }


    /**
     * @throws RandomException
     * @throws Exception
     */
    function create(): void
    {

        session_start();
        // TODO: Implement create() method.
        $name = $this->validation_input($_POST["name"]);
        $age = $this->validation_input($_POST["age"]);
        $email = $this->validation_input($_POST["email"]);
        $cin = $this->validation_input($_POST["cin"]);
        $phone = $this->validation_input($_POST["phone"]);
        $password = $this->validation_input($_POST["password"]);
        $confirmation_password = $this->validation_input($_POST["confirmation_password"]);
        if(!(empty($name) && empty($age) && empty($email) && empty($phone) && empty($cin) && empty($password) && empty($confirmation_password) )){
            if($password==$confirmation_password){
                $user=new User($name,$email,intval($age),$phone,$cin,password_hash($password, PASSWORD_DEFAULT));
                if($user->check_auth_register()==null) {
                    $user->add();
                    $_SESSION['id_user']=$user->getId();
                    $_SESSION["name"]=$user->getFull_name();

                    //verification email

                    include(__DIR__ . "/../PhpMailer/mail.php");
                    $token = bin2hex(random_bytes(8));
                    $expire = date("U")+1800;
                    $url="localhost:8080/streamstadium/auth/profile/".$token;
                    $mail->addAddress($email,$name);
                    $mail->Subject = "Confirmation your Compte for StreamStadium";
                    $mail->Body = "<html><head></head>
                    <body>
                    <p>the link to Confirm your compte is below.if you did not make this request, you can ignore this email </p>
                    <p>Here is your Confirmation reset link: </p> <br>
                    <a href='$url'>$url</a> 
                    </body>
                    </html>";
                    $mail->send();
                    $verification=new Verification($email,$token,$expire);
                    $verification->add();

                    header("Location: /streamstadium/Auth/profile");
                }
                else $this->render("views","register","Register","email_exist");

            }
            else $this->render("views","register","Register","confirmation_password_incorrect");
        }
        else $this->render("views","register","Register","enter_all_data");


    }

    function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    public function update(int $id): void
    {
        // TODO: Implement update() method.

        $user=new user($_POST["full_name"],$_POST["email"],$_POST["age"],$_POST["phone"]);
        $user->setId($id);

        $user_find=$user->check_auth_login();
        if($user_find!=null){
            if($user_find->id!=$id){
                header("Location: /streamstadium/Auth/profile/email_exist");
                die;
            }
        }
        $user->edit();
        session_start();
        $_SESSION["name"]=$_POST["full_name"];
        //header("Location: /streamstadium/Auth/profile/update_succes");
        header("Location: /streamstadium/Auth/profile");
        die;
    }

    function sign_in($msg=null): void
    {
        session_start();
        // TODO: Implement login() method.
        $this->render("views","sign_in","Sign in",$msg);
    }
    public function login():void{
        session_start();
        $email = $this->validation_input($_POST["email"]);
        $password = $this->validation_input($_POST["password"]);
        if(!(empty($password) || empty($email))){
            $user=new User();
            $user->setEmail($email);
            $us=$user->check_auth_login();
            if($us!=null){
                if(password_verify($password, $us->password)){
                    $_SESSION["id_user"]=$us->id;
                    $_SESSION["name"]=$us->full_name;
                    header("Location: /streamstadium/Auth/profile");
                    die;
                }
                else{
                    header("Location: /streamstadium/Auth/sign_in/password_incorrect");
                    die;
                }
            }
            else{
                header("Location: /streamstadium/Auth/sign_in/email_not_found");
                die;
            }

        }
        else{
            header("Location: /streamstadium/Auth/sign_in/enter_all_data");
            die;
        }
    }
    function register(): void
    {
        session_start();
        // TODO: Implement login() method.
        $this->render("views","register","Register");
    }
    function profile($token=null): void
    {
        session_start();
        if(isset($_SESSION["id_user"])){
            $user = new user();
            $user->setId($_SESSION["id_user"]);
            $user->show();

            if($token!=null){
                $currentdate=date("U");
                $verification = new Verification("null",$token,$currentdate);
                $check_verif=$verification->check_token();
                if($check_verif!=null){
                    $us=new user("null",$check_verif->email);
                    $u= $us->check_auth_login();
                    $us->setId($u->id);
                    $us->verify();
                    $verif_delete=new Verification($check_verif->email);
                    $verif_delete->destroy();
                }
            }
            $user->show();

            $this->render("views","profile","Profile",$user);
        }
        else header("Location: /streamstadium/Auth/sign_in");

    }
    public function verify(string $email):void{

        include(__DIR__ . "/../PhpMailer/mail.php");
        $token = bin2hex(random_bytes(8));
        $expire = date("U")+1800;
        $url="localhost:8080/streamstadium/auth/profile/".$token;
        $mail->addAddress($email,"test");
        $mail->Subject = "Confirmation your Compte for StreamStadium";
        $mail->Body = "<html><head></head>
                    <body>
                    <p>the link to Confirm your compte is below.if you did not make this request, you can ignore this email </p>
                    <p>Here is your Confirmation reset link: </p> <br>
                    <a href='$url'>$url</a> 
                    </body>
                    </html>";
        $mail->send();
        $verification=new Verification($email,$token,$expire);
        $verification->add();
        header("Location: /streamstadium/Auth/profile");

    }
    public function log_out():void {

            session_start();
            unset($_SESSION["id_user"]);
            unset($_SESSION["name"]);
            header("Location: /streamstadium/Auth/sign_in");

    }
}