<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'ic',
        'department_id',
        'basic_salary',
        'phone_number',
        'address',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
