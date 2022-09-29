<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['news_title','news_description','author_id','excerpt','category_id','meta_tag','meta_content','is_feature','feature_image','status','publish_date','flag','category_slug', 'news_slug'];
}
