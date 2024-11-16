<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayrollItem extends Model
{
    protected $fillable = [
        'name',
        'type',
        'amount',
        'description',
        'status',
    ];
}
