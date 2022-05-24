<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'age','desc'
    ];
}
