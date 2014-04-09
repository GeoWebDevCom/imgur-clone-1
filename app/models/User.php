<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = array('username', 'email', 'password');
	protected $guarded = array('id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getImages()
	{

		
		$path = 'uploads/'. Auth::user()->username . '/';
		//$path = base_path() . '//public/' .'uploads/'. $this->username;
		$files = scandir($path);
		$brand_images = array();
//		foreach ($files as $key => $file) {
//			if(File::is(array('jpeg', 'jpg', 'png', 'gif'), $path.DS.$file))
//			{
//				$brand_images[] = $files[$key];
//			}
//		}
		
	    foreach ($files as $file) 
	    {
	    	
	    		//echo "File: $file <br>";	
	    		echo $previewimage = '<img src='. $path . $file . '>';
	    	  
    	}
	    
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function store()
	{
		return 'store is true';
	}

	

}