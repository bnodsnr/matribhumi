<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'address',
        'phone_no',
        'ads_phone_no',
        'company_email',
        'registration_no',
        'president',
        'editor',
    ];
}
