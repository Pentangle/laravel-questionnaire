<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;

class Choice extends Model
{
    use CrudTrait;

    protected $casts = [
        'type' => InputTypeEnum::class,
    ];

    protected $fillable = [
        'name',
        'question_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getImageAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }

    public function getAsStringAttribute(): string
    {
        return $this->name;
    }
}
