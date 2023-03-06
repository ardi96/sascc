<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobileno',
        'nric',
        'dob',
        'address_1',
        'address_2',
        'city',
        'post_code',
        'state',
        'work_location',
        'salary',
        'duitnow_id',
        'bank_acc_no',
        'bank_code',
        'status',
        'company_id',
        'user_id',
    ];

    public function documents()
    {
        return $this->hasMany(ClientDocument::class);
    }

    public function advances()
    {
        return $this->hasMany(ClientAdvance::Class);
    }
    


}
