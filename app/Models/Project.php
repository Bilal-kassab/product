<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table='projects';
   protected $fillable=[
        'name',
        'introduction',
        'location',
        'cost',
        'created_at',
        'updated_at',
    ];
}
