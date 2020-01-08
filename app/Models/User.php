<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model{

	protected $table         = 'users';
	protected $allowedFields = [
		'fullname',
 		'status',
		'username',
		'password'
	];

	protected $primaryKey     = 'id';
	protected $useSoftDeletes = true;

	protected $useTimestamps = true;
	protected $createdField  = 'date_created';
	protected $updatedField  = 'date_modified';

	public function getByUsername($username){
		$model = new User;
		return $model->where('status', 1)
					 ->where('is_deleted', 1)
					 ->where('username', $username)
 					 ->first();

	}
}
