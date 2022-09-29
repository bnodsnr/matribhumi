<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable =['news_title','news_description','author_id','excerpt','category','meta_tags','meta_content','feature_image','status','publish_date','flag','category_slug','news_slug'];


    public function author() {
       return $this->belongsTo(User::class,'author_id');
    }
}
