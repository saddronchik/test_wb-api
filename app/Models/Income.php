<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['date'];

    protected $hidden = [
        'updated_at',
        'created_at',
        'id'
    ];
}
