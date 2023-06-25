<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDescription extends Model
{
    use HasFactory, HasTranslations;

    protected $translationClass = AboutDescriptionTranslation::class;
}
