<?php
namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\User;
use Sirius\Validation\Validator;

class RegisterController extends BaseController {

    public function getRegister()
    {
        $webInfo = ['title' => 'Registro de Usuarios'];
        return $this->render('auth/register.twig', ['webInfo' => $webInfo]);
    }

    public function postRegister()
    {
        $errors = [];
        $webInfo = ['title' => 'Registro de Usuarios'];

        $validator = new Validator();

        $validator->add('inputName:Nombre', 'required', [], 'El {label} es obligatorio');
        $validator->add('inputName:Nombre', 'minlength', ['min' => 3], 'El {label} debe tener al menos 3 caracteres');
        $validator->add('inputEmail:Email', 'required', [], 'El {label} es obligatorio');
        $validator->add('inputEmail:Email', 'email', [], 'No es un email válido');
        $validator->add('inputFechaNac:Fecha de Nacimiento', 'required', [], 'La {label} es obligatoria');
        $validator->add('inputPassword1:Password', 'required', [], 'La {label} es requerida');
        $validator->add('inputPassword1:Password', 'minlength', ['min' => 5], 'La {label} debe tener al menos 5 caracteres');
        $validator->add('inputPassword2:Password', 'required', [], 'La {label} es requerida');
        $validator->add('inputPassword2:Password', 'match', 'inputPassword1', 'Las passwords deben coincidir');

        if ($validator->validate($_POST)) {
            $user = new User();

            $user->nombre = $_POST['inputName'];
            $user->email = $_POST['inputEmail'];
            $user->fechaNac = $_POST['inputFechaNac'];
            $user->contraseña = password_hash($_POST['inputPassword1'], PASSWORD_DEFAULT);

            $user->save();

            header('Location: ' . BASE_URL);
        } else {
            $errors = $validator->getMessages();
        }
        return $this->render('auth/register.twig', ['errors' => $errors, 'webInfo' => $webInfo]);
    }
}