<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    protected $table ="contacts";
    use HasFactory, SoftDeletes;  // Enable SoftDeletes

    protected $fillable = ['name', 'message', 'phone','status'];

    const DELETED_AT = 'deleted_at';
}
