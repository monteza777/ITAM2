<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = ['server_name'];

    public function server_details(){
    	return $this->hasMany(ServerDetails::class);
    }
}
