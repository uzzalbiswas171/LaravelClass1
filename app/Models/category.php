<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
        // Allow mass assignment for 'name' and 'email'
        protected $fillable = ['name', 'email'];
}
