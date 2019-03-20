<?php 
 namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use Core\Auth\DBAuth;
 class PostsController extends AppController{

 	public function __construct(){
 		parent::__construct();
 		$this->loadModel('Jeu');
 	}

 	public function index(){
 		$posts=$this->Jeu->all();
 		$this->render('admin.posts.index',compact('posts'));
 	}
 	public function add(){

		if(!empty($_POST)){
			$result=$this->Jeu->create([
				'nom'=>$_POST['nom'],
				'type'=>$_POST['type'],
				'description'=>$_POST['description'],
				'latitude'=>$_POST['latitude'],
				'longitude'=>$_POST['longitude'],
				'numQuestio'=>$_POST['numQuestio']
			]);
			if($result){
				return $this->index();
			}
		}
		$this->loadModel('Questionnaire');
		$categories=$this->Questionnaire->extract('id','nomQuestionnaire');
		$form=new BootstrapForm($_POST);
		$this->render('admin.posts.edit',compact('categories','form'));
	}

	public function edit(){
		if(!empty($_POST)){
			$result=$this->Jeu->update($_GET['id'],[			
				'nom'=>$_POST['nom'],
				'type'=>$_POST['type'],
				'description'=>$_POST['description'],
				'latitude'=>$_POST['latitude'],
				'longitude'=>$_POST['longitude'],
				'numQuestio'=>$_POST['numQuestio']
			]);
			if($result){
				return $this->index();
			}
		}

		$post=$this->Jeu->find($_GET['id']);
		$this->loadModel('Questionnaire');
		$categories=$this->Questionnaire->extract('id','nomQuestionnaire');
		$form=new BootstrapForm($post);
		$this->render('admin.posts.edit',compact('categories','form'));
	}	

	

	public function delete(){
		if(!empty($_POST)){
			$result=$this->Jeu->delete($_POST['id']);
			 return $this->index();
		}
	}
 	
 }
 ?>
