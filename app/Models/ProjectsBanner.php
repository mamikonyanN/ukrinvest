<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsBanner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_name'];
}
