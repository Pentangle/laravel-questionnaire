<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Database\Factories\ChoiceFactory;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;

class Choice extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $casts = [
        'type' => InputTypeEnum::class,
    ];

    protected $fillable = [
        'name',
        'question_id',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return ChoiceFactory
     */
    protected static function newFactory(): ChoiceFactory
    {
        return ChoiceFactory::new();
    }

    /**
     * Relationships
     */
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
