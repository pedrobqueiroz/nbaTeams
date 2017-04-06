<?php 

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller{

	public function signin(){
		unset($_SESSION['flash']);
		$this->show('user/signin');
	}
	public function signinPost(){
		debug($_POST);

		$email = isset($_POST['emailToto']) ? trim(strip_tags($_POST['emailToto'])) : '';
		$password = isset($_POST['passwordToto1']) ? trim(strip_tags($_POST['passwordToto1'])) : '';

		$errorList = array ();

		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
				$errorList[]='Email is incorrect';
		}
		if(strlen($password)<6){
				$errorList[]='Password must be at least 6 char. long';
		}
		if(empty($errorList)){
			$authentificationModel = new \W\Security\AuthentificationModel();
			$userId = $authentificationModel->isValidLoginInfo($email, $password);

			if($userId>0){
				$usersModel = new \W\Model\UsersModel();
				$userInfo = $usersModel->find($userId);
				$authentificationModel->logUserIn($user);

				$this->flash('Success for user:'.$userInfos['usr_email'], 'success');
				$this->redirectToRoute('default_home');
			}
			else{
				$this->flash($userInfos['usr_email'].' : this email is bad!', 'success');

			}
		}
		else{
			$this->flash(join('<br>', $errorList), 'danger');
		}
		$this->show('user/signin');

	}
	public function signup(){
		unset($_SESSION['flash']);

		if (!empty($_POST)){
			//debug($_POST);

			$errorList = array();

			$email = isset($_POST['emailToto']) ? trim(strip_tags($_POST['emailToto'])) : '';
			$password = isset($_POST['passwordToto1']) ? trim(strip_tags($_POST['passwordToto1'])) : '';
			$password2 = isset($_POST['passwordToto2']) ? trim(strip_tags($_POST['passwordToto2'])) : '';
			if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
				$errorList[]='Email incorrect';
			}
			if(strlen($password)<6){
				$errorList[]='Password must be at least 6 char. long';
			}
			if($password!=$password2){
				$errorList[]='Both passwords must match';
			}
			if(empty($errorList)){
				$usersModel = new \W\Model\UsersModel();
				if($usersModel->emailExists($email)){
					$this->flash('Email already exists!', 'danger');
				} 	
				else{
					$authentificationModel = new \W\Security\AuthentificationModel();
					$hashPassword = $authentificationModel->hashPassword($password);
					$insertedUser = $usersModel->insert(array(
							//'usr_username' => '',
							'usr_email' => $email,
							'usr_password' => $hashPassword,
							'usr_role' => 'user'
					));

					if(!empty($insertedUser)){
						$this->flash('Account created', 'success');
						$this->redirectToRoute('user_signin');
					}
					else{
						$this->flash('Couldn\'t create account', 'danger');
					}
				}	
			}
			else{
				$this->flash(join('<br>', $errorList), 'danger');
			}
			//exit;
		}
		$this->show('user/signup');

	}
	// public function forgotPassword(){
		
	// }

}