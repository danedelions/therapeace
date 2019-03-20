<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'client_id',
        'city',
        'province',
        'res_detail',
        'street',
        'brgy',
        'building',
        'landmark',
        'address_remark',
    ];

    public function getAddressAttribute()
    {
        return "{$this->res_detail}, {$this->building}, {$this->street}, {$this->brgy}, {$this->city}, {$this->postal_code}, {$this->country}";
    }
}
