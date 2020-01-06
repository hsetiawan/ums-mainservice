<?php

class User extends Codeigniter\Model{

	protected $table         = 'users';
	protected $allowedFields = [
		'fullname',
		'employeeId',
		'status',
	];
}
