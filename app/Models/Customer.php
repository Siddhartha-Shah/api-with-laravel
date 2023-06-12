<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey="customer_id";
    public function service(){
        return $this->hasMany('App\Models\Service','service_id','service_id');
    }
}
