<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packege extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description'];
}