<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'developer_id',
        'name',
        'code',
        'location',
        'city',
        'province',
        'property_type',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
