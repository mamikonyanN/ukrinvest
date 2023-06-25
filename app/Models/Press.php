<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'press';
    protected $fillable = ['created_at'];
    protected $translationClass = PressTranslation::class;
}
