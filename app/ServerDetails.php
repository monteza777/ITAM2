<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServerDetails extends Model
{
	use SoftDeletes;

    protected $fillable = ['product','organization','os_version','brand','model','asset_tag','license','serial','cpu','ram','disks_type','disks_free_pe'];

    protected $dates = ['deleted_at'];

    
    public function server(){
    	return $this->belongsTo(Server::class);
    }
}