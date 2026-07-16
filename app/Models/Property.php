<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\database\Eloquent\SoftDeletes;
use App\Enums\PropertyStatus;
use App\Enums\PropertyType;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'block',
        'lot',
        'unit_number',
        'model',
        'lot_area',
        'floor_area',
        'tcp',
        'status',
        'is_active'
    ];

    protected function casts(): array
    {
        return [
            'status' => PropertyStatus::class,
            'is_Active' => 'boolean',
            'lot_area' => 'decimal:2',
            'floor_area' => 'decimal:2',
            'tcp' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    // protected $casts = [
    //     'lot_area' => 'decimal:2',
    //     'floor_area' => 'decimal:2',
    //     'tcp' => 'decimal:2',
    //     'is_active' => 'boolean',
    // ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
