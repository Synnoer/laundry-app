<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        'durations',
        'session',
        'service'
    ];
    protected $table = 'membership_types';
}
