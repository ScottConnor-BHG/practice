<?php

class UserController extends AdminController
{
	public function __construct()
	{
		if(!AdminUser::isLoggedIn())
		{
			$this->loadModule('admin', 'home', 'default', true);
			return false;
		}
	}

	public function loadDefault()
	{
		$this->loadModule('admin', 'user', 'user_list', true);
		return false;
	}

	public function loadUserList()
	{
		$this->admin_users = AdminUserCollection::getAll();
		$this->users = UserCollection::getAll();
		return true;
	}
	public function loadAddUser()
	{
		// $this->admin_users = AdminUserCollection::getAll();
		// $this->users = UserCollection::getAll();
		if(isset($_POST['posted']))
		{

			 if(isset($_POST['username']))
		  {
		  	$username = $_POST['username'];
		  // 	$user_check = new User();
				// $is_new= $user_check->isNewUser($username);
		  }
		  else
		  {
		  	// $is_new =false;
		  	$this->bad[] ="Username must be provided as email";
		  }
		  if(isset($_POST['password']))
		  {
		  	$password = $_POST['password'];
		  }
		  else
		  {
		  	$this->bad[] ="Password must be at least 8 characters";
		  }
		  if(isset($_POST['first_name']))
		  {
		  	$first_name = $_POST['first_name'];
		  }
		  else
		  {
		  	$this->bad[] ="First Name must be provided";
		  }
		  if(isset($_POST['last_name']))
		  {
		  	$last_name = $_POST['last_name'];
		  }
		  else
		  {
		  	$this->bad[] ="Last Name must be provided";
		  }
		  if(isset($_POST['title']))
		  {
		  	$title = $_POST['title'];
		  }
		  else
		  {
		  	$this->bad[] ="Title must be provided";
		  }
			if(strlen($_POST['password']) < 8)
			{
				$this->bad[] = "Password must be at least 8 characters";
			}

			//Good to go

				
				$user = new User();
				$user->setCreatedAt(date('Y-m-d G:i:s'));
				$user->setUpdatedAt(date('Y-m-d G:i:s'));
				$user->setUsername($username);
				$user->setPassword($password);
				$user->setFirstName($first_name);
				$user->setLastName($last_name);
				$user->setTitle($title);
				$user->save();
			  
			
			}

		return true;
		}
}