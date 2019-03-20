<?php 
 namespace App\Controller;
 use  Core\Controller\Controller;
 use \App;
 class PostsController extends AppController{

 	public function __construct(){
 		parent::__construct();
 		$this->loadModel('Jeu');
 		$this->loadModel('Questionnaire');
 	}
 	public function index(){
 		$posts=$this->Jeu->last();
 		$categories=$this->Questionnaire->all();
 		$this->render('posts.index',compact('posts','categories'));
 	}

 	public function categorie(){
		$categorie=$this->Questionnaire->find($_GET['id']);
    	if ($categorie===false){
       		$this->notFound();
    	}
		$articles=$this->Jeu->lastByCategory($_GET['id']);
    	$categories=$this->Questionnaire->all();
    	$this->render('posts.categorie',compact('articles','categories','categorie'));
 	}

 	public function show(){
 		$article=$this->Jeu->findWithCategorie($_GET['id']);
 		$this->render('posts.show',compact('article'));
 	}
 }
 ?>
