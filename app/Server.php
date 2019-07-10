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
         foreach ($servers->server_details()->get() as $details) {
            $details->delete();
         }
      });
    }

    public function server_details(){
    	return $this->hasMany(ServerDetails::class);
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
