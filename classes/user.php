<?php
	
class User extends Base 
{
	protected $name;
	protected $email;
	Protected $type = 'user';
	
	public function __construct(){
		parent::__construct('user');
	}
	
}
?>