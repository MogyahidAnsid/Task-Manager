<?php

namespace App\Models;

use App\Enum\PriorityEnum;
use App\Enum\ProjectStatusEnum;
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

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [
                'key' => ProjectStatusEnum::from($value)->value,
                'label' => ProjectStatusEnum::from($value)->label(),
            ]
        );
    }

    public function priority(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => [
                'icon' => PriorityEnum::from($value)->icon(),
                'label' => PriorityEnum::from($value)->label(),
                'iconLabel' => PriorityEnum::from($value)->iconLabel(),
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
