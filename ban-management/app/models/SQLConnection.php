<?php

class SQLConnection extends Eloquent {

    protected $table = 'sql_connections';
	
	public function server()
    {
        return $this->belongsTo('Server', 'id', 'sql_connection');
    }
}