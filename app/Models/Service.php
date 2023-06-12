<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey="service_id";
    public function customer(){
        return $this->hasMany('App\Models\Customer','service_id','service_id');
    }
}
