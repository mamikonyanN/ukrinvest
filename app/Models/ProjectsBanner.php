<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsBanner extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image_name'];
    protected $translationClass = ProjectsBannerTranslation::class;
}
