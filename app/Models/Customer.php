<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Option 1
    // protected $fillable = ['name', 'email'];

    // Option 2
    protected $guarded = [];
}
