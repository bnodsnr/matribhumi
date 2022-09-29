<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidoe extends Model
{
    use HasFactory;
    protected $fillable = ['url','status','headline', 'is_feature'];
}
