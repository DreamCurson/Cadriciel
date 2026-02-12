<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
// id, name, address, phone, email, birth, country_id, created_at, updated_at
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'birth',
        'country_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
