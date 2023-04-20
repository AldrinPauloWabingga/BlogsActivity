<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model

{ protected $fillable =[
    'title',
    'author',
    'summary',
    'context',
    'publish_at',
];
}

