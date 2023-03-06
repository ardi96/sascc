<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAdvance extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'requested_date',
        'advance_amount',
        'disbursed_amount',
        'duration',
        'status',
        'validated_date',
        'validated_user',
    ];
}
