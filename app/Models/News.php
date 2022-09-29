<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable =['news_title','news_description','author_id','excerpt','category','meta_tags','meta_content','feature_image','status','publish_date','flag'];
}
