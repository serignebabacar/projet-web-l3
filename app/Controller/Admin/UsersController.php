<?php 
 namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use Core\Auth\DBAuth;
 class UsersController extends AppController{

 	public function __construct(){
 		parent::__construct();
 		$this->loadModel('User');
 	}
 	public function index(){
 		$users=$this->User->all();
 		$this->render('admin.users.index',compact('users'));
 	}
 	public function add(){

		if(!empty($_POST)){
			$result=$this->User->create([
				'nom'=>$_POST['nom'],
				'pseudo'=>$_POST['pseudo'],
				'nationalite'=>$_POST['nationalite'],
				'motdepass'=>md5($_POST['motdepass']),
			]);
			if($result){
				return $this->index();
			}
		}
		$form=new BootstrapForm($_POST);
		$this->render('admin.users.edit',compact('form'));
	}
	public function edit(){
		if(!empty($_POST)){
			$result=$this->User->update($_GET['id'],[
				'nom'=>$_POST['nom'],
				'nationalite'=>$_POST['nationalite'],
				'motdepass'=>md5($_POST['motdepass']),
			]);
			return $this->index();
		}
		$user=$this->User->find($_GET['id']);
		$form=new BootstrapForm($user);
		$this->render('admin.users.edit',compact('form'));
	}	
		public function delete(){
		if(!empty($_GET)){
			$result=$this->User->delete($_GET['id']);
			 return $this->index();
		}
	}
 }