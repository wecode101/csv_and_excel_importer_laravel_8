<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * Fillable fields for a Profile.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'city',
        'postal_code',
        'state',
    ];
}
