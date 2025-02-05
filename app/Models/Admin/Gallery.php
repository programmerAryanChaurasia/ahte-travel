<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{

    protected $table ="gallerys";
    use HasFactory, SoftDeletes;  // Enable SoftDeletes

    protected $fillable = ['your_name', 'place_name', 'text','image','status','phone'];

    const DELETED_AT = 'deleted_at';
}
