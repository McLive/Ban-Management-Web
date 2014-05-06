<?php

class User extends Eloquent implements Illuminate\Auth\UserInterface, Illuminate\Auth\Reminders\RemindableInterface {

    protected $table = 'users';
	
	public function getReminderEmail()
    {
        return $this->email;
    }
	
	public function getAuthIdentifier()
    {
        return $this->username;
    }
	
	public function getAuthPassword()
    {
        return $this->password;
    }
	
}