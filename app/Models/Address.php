<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $connection = 'pgsql2';
    
    protected $fillable = ['address','number','district','zip_code','city','state'];    

    public function company(){
        return $this->hasOne(Company::class, 'address_id');
    }
}
