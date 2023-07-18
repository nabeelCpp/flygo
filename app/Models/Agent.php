<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    use HasFactory;
    protected $guard = 'agent';
    protected $fillable = [
        'landline',
        'email',
        'password',
        'mobile',
        'country',
        'city',
        'username',
        'company_logo',
        'company_name',
        'name',
        'akama',
        'credit_limit',
        'service_charge_type',
        'service_charges',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
