<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['image_name', 'icon_name'];
    protected $translationClass = ServiceTranslation::class;
}
