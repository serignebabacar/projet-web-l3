<?php
namespace App\Table;
use Core\Table\Table;

 class UserTable extends Table{
 	protected $table='user';
 	public function findWithId($id){

		return $this->query("
			SELECT nom
			FROM user
			WHERE user.id=?
			",[$id],true);
	}
 }