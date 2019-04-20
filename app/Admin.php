<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $status = array(
    	'0' => 'unblocked',
    	'1' => 'blocked',
    	'2' => 'approved'
    );

    public function getStatusAttribute($value)
    {
    	return $this->status[$value];
    }
}
