<?php
namespace App\Table;
use Core\Table\Table;

class JeuTable extends Table{
	protected $table='jeu';
	/**
	*Recupere les derniers articles 
	*@return array
	*/

	public function last(){

		return $this->query("
			SELECT jeu.id,jeu.nom,jeu.longitude,jeu.latitude,questionnaire.nomQuestionnaire 
			FROM jeu
			LEFT JOIN questionnaire ON questionnaire.id=jeu.numQuestio
			ORDER BY jeu.id DESC");			
	}
	/**
	*Recupere un article en lisant la categorie associée 
	*@param id int
	*@return  App\Entity\PostEntity
	*/

	public function findWithCategorie($id){

		return $this->query("
		SELECT jeu.id,jeu.nom,jeu.longitude,jeu.latitude,questionnaire.nomQuestionnaire 
		FROM jeu
		LEFT JOIN questionnaire ON questionnaire.id=jeu.numQuestio
		WHERE jeu.id=?
			",[$id],true);
	}
/**
	*Recupere les derniers articles de la categorie
	*@param category_id int
	*@return array
	*/

	public function lastByCategory($category_id){

		return $this->query("
		SELECT jeu.id,jeu.nom,jeu.longitude,jeu.latitude,questionnaire.nomQuestionnaire 
		FROM jeu
		LEFT JOIN questionnaire ON jeu.numQuestio=questionnaire.id
		WHERE jeu.numQuestio=?
			ORDER BY jeu.id DESC ",[$category_id]);
	}
	public function all(){

		return $this->query("
		SELECT jeu.id,jeu.nom,jeu.type,jeu.description,jeu.longitude,jeu.latitude,questionnaire.nomQuestionnaire 
		FROM jeu
		LEFT JOIN questionnaire ON jeu.numQuestio=questionnaire.id
		
			ORDER BY jeu.id DESC ");
	}

}