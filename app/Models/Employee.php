<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'address',
        'departemen_id',
        'gender',
        'phone',
        'email',
        'is_active'
    ];

    public function departemen()
{
    return $this->belongsTo(Departemen::class, 'departemen_id');
}
}
