<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataCenter extends Model
{
	protected $fillable = ['datacenter_link','location','rack_unit','position','pdu_a_position','pdu_b_position','cage_key_code','smarthand_request'];

    public function server(){
    	return $this->belongsTo(Server::class);
    }
}
