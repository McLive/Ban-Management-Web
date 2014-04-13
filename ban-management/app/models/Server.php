<?php

class Server extends Eloquent {

    protected $table = 'servers';
	
	public function sqlconnection()
    {
        return $this->hasOne('SQLConnection', 'id', 'sql_connection');
    }

}