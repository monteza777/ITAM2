<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataCenter extends Model
{
	use SoftDeletes;
	
	protected $fillable = ['datacenter_link','location','rack_unit','position','pdu_a_position','pdu_b_position','cage_key_code','smarthand_request'];

	protected $dates = ['deleted_at'];

    public function server(){
    	return $this->belongsTo(Server::class,'server_id');
    }
}
