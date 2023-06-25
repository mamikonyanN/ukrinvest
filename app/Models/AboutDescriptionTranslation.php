<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDescriptionTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['text', 'locale'];
}
