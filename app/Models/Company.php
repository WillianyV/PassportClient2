<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $connection = 'pgsql2';
    
    protected $fillable = ['cnpj', 'corporate_name', 'fantasy_name', 'status', 'address_id'];
    
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
