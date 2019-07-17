<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NetworkManagement extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['ip_address','remote_console_ip','dns','interfaces','eth0','eth1','mounted_vips'];
    protected $dates = ['deleted_at'];

    public function server(){
    	return $this->belongsTo(Server::class);
    }
}
