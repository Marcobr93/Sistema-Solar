<?php
namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Log;
use App\Models\User;
use Sirius\Validation\Validator;
class AuthController extends BaseController {

    public function getLogin(){
        return $this->render('auth/login.twig',[]);
    }

    public function postLogin(){
        $errors = [];
        $validator = new Validator();

        $validator->add('inputEmail:Email', 'required', [], 'El {label} es requerido');
        $validator->add('inputEmail:Email','email',[], 'No es un email válido');
        $validator->add('inputPassword:Password','required',[], 'La {label} es requerida');

        if($validator->validate($_POST)){
            $user = User::where('email', $_POST['inputEmail'])->first();
            if(password_verify($_POST['inputPassword'], $user->contraseña)){
                $_SESSION['userId'] = $user->id;
                $_SESSION['userName'] = $user->nombre;
                $_SESSION['inputEmail'] = $user->email;

                header('Location: '.BASE_URL);
                return null;
            }
            $validator->addMessage('authError','Los datos son incorrectos');
        }

        $errors = $validator->getMessages();

        return $this->render('auth/login.twig', ['errors' => $errors]);
    }

    public function getLogout(){
        //session_destroy();
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        header("Location: ". BASE_URL);
    }
}