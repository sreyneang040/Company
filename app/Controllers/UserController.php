<?php namespace App\Controllers;
use App\Models\UsersModel;
class UserController extends BaseController
{
	// login user process
	public function index()
	{
		helper(['form']);
		$data = [];
		if($this->request->getMethod() == "post"){
			$rules = [
				'first_name' => 'required',
				'password' => 'required|validateUser[first_name,password]'
			];
			$errors = [
				'password' => [
					'validateUser' => 'You did not have account yet!!'
				]
			];

			if(!$this->validate($rules,$errors)){
				$data['validation'] = $this->validator;
			}else{
				$model = new UsersModel();
				$user = $model->where('first_name',$this->request->getVar('first_name'))
							  ->first();
				$this->setUserSession($user);
				return redirect()->to( base_url('/register'));
			}
		}
		return view('auths/login',$data);
		}

	// set value to new session
	public function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'first_name' => $user['first_name'],
			'last_name' => $user['last_name'],
			'email' => $user['email'],
			'password' => $user['password'],
			'role' => $user['role'],
			'isLoggedIn' => true
		];
		session()->set($data);
		return false;
	}

	// create account 
	public function register()
	{
		helper(['form','url']);
		$data = [];
		if($this->request->getMethod() == "post")
		{
			
				$model = new UsersModel();
				$firstName = $this->request->getVar('first_name');
				$lastName = $this->request->getVar('last_name');
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$data = [
					'first_name' => $firstName,
					'last_name' => $lastName,
					'email' => $email,
					'password' => $password,
					'role' => $role,
				];
				$model->createUsers($data);
				$session = session();
				$session->setFlashdata('success','successful Register Account');
				return redirect()->to(base_url('/login'));		
		}
		return view('auths/createAccount',$data);
	}
	public function homePage(){
		return view('home_page');
	}
}
