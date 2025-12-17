<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasScope;

class Supplier extends Model
{
    use HasFactory, HasScope;
    protected $fillable = ['name', 'telp', 'address'];
}
