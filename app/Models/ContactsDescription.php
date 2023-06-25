<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsDescription extends Model
{
    use HasFactory, HasTranslations;

    protected $translationClass = ContactsDescriptionTranslation::class;
}
