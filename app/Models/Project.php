<?php

namespace App\Models;

use App\Enum\PriorityEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
    ];

    protected $casts = [
        'status' => ProjectStatusEnum::class,
        'priority' => PriorityEnum::class,
    ];

    public function priority(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [
                'label' => PriorityEnum::from($value)->label(),
                'color' => PriorityEnum::from($value)->color()
            ]
        );
    }

    public function slug(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::slug($this->name, '-')
        );
    }
}
