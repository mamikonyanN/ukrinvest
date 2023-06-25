<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'news';
    protected $fillable = ['image_name', 'created_at'];
    protected $translationClass = NewsTranslation::class;
}
