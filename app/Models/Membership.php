<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'join_date',
        'end_date',
        'session_left',
        'membership_type_id'
    ];

    public function membershiptype()
    {
        return $this->belongsTo(Membership_Type::class);
    }
}
