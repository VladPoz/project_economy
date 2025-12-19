<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'login',
        'password',
        'company_name',
        'company_tupe',
        'company_IIN',
        'updated_at',
        'created_at'
    ];
}
