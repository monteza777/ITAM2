<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Server extends Model
{
	use SoftDeletes;

    protected $fillable = ['server_name'];
    protected $dates = ['deleted_at'];

    protected static function boot() 
    {
      parent::boot();

      static::deleting(function($servers) {
         $servers->server_details->delete();
         $servers->data_center->delete();
         $servers->network_management->delete();
         $servers->platform->delete();
      });

      static::restoring(function ($servers) {
             $servers->server_details->restore();
             $servers->data_center->restore();
             $servers->network_management->restore();
             $servers->platform->restore();
        });
    }

    public function server_details(){
    	return $this->hasOne(ServerDetails::class);
    }

    public function data_center(){
      return $this->hasOne(DataCenter::class);
    }

    public function network_management(){
      return $this->hasOne(NetworkManagement::class);
    }

    public function platform(){
      return $this->hasOne(Platform::class);
    }

    public function notification(){
      return $this->hasOne(Notification::class);
    }

}
