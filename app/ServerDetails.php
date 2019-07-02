<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerDetails extends Model
{
    protected $fillable = ['os_version','brand','model','asset_tag','license','serial','cpu','ram','disks_type','disks_free_pe'];

    public function server(){
    	return $this->belongsTo(Server::class);
    }
}
