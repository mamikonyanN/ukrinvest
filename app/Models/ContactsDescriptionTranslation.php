<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsDescriptionTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['phone', 'email', 'building_number', 'street', 'postal_code', 'city', 'country', 'locale'];
}
