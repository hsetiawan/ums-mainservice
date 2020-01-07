<?php

class User extends Codeigniter\Model{

	protected $table         = 'users';
	protected $allowedFields = [
		'fullname',
		'employeeId',
		'status',
	];

	protected $primaryKey     = 'id';
	protected $useSoftDeletes = true;

	protected $useTimestamps = true;
}
