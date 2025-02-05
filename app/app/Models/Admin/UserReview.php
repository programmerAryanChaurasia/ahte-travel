<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserReview extends Model
{

    use HasFactory, SoftDeletes;  // Enable SoftDeletes

    protected $fillable = ['name', 'message', 'rating', 'image' ,'status'];

    const DELETED_AT = 'deleted_at';
}
