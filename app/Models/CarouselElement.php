<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselElement extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image_name'];
    protected $translationClass = CarouselElementTranslation::class;
}
