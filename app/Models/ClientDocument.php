<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'document_type_id',
        'status',
        'uploaded_date',
        'filename',
        'validated_by',
        'validated_at',
        'description'
    ];
}
