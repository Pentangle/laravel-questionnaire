<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;

class Choice extends Model
{
    protected $casts = [
        'type' => InputTypeEnum::class,
    ];

    public function getImageAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }

    public function getAsStringAttribute(): string
    {
        return $this->name;
    }
}
