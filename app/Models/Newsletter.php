<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'email',
        'created_at'
    ];


    public static $rules = [
        'email' => 'required|email:rfc,dns|unique:newsletters'
    ];
}
