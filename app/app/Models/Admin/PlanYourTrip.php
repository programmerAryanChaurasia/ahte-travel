<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanYourTrip extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'from_city',
        'to_city',
        'number_of_people',
        'phone_number',
        'status',
        'response_after_contact',
        'last_contact_date',
        'future_contact_date',
    ];
}
