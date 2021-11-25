<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Login extends Controller {

	
	public function index(){
		helper(['form']);
		// echo view('login');
		return view('\App\Views\login.php');
	}

	public function Auth(){
		$session = session();
		$model = new UserModel();
		$user = $this->request->getVar('usern');
		$password = $this->request->getVar('passw');
		$data = $model->where('usern',$user)->first();
		if($data){
			$pass = password_hash($data['passw'], PASSWORD_DEFAULT);
            $authenticatePassword = password_verify($password, $pass);
			if($authenticatePassword){
				$session_data = [
					'id_admin' => $data['id_admin'],
					'name_user' => $data['name'],
					'licensed' => $data['licensed'],
					'type_user' => $data['type'],
					'logged_in' => TRUE
				];
				$session->set($session_data);
				return redirect()->to('/dashboard');
			}else{
				$session->setFlashdata('msg','Wrong Password');
				return redirect()->to(base_url().'/login');
			}
		}else{
			$session->setFlashdata('msg','Username Not Found');
			return redirect()->to(base_url().'/login');
		}
	}

	public function Logout(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url().'/login');
	}
}

