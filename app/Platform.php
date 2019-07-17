<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
	use SoftDeletes;
	
   	protected $fillable = ['mounted_platforms','sftp_directories','sftp_client_pass'];
   	protected $dates = ['deleted_at'];

    public function server(){
    	return $this->belongsTo(Server::class);
    }
}
