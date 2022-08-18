<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use App\Traits\BackpackMediaLibraryTrait;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Database\Factories\ChoiceFactory;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Choice extends Model implements HasMedia
{
    use CrudTrait;
    use HasFactory;
    use InteractsWithMedia;
    use BackpackMediaLibraryTrait;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('image')
                    ->width(300);
            });
    }

    protected $casts = [
        'type' => InputTypeEnum::class,
    ];

    protected $fillable = [
        'name',
        'question_id',
        'image',
        'extras',
        'associated_value',
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

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('image', 'image');
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "link_type/$this->id";

        $this->save();

        $this->saveBase64OrFileToMediaLibrary($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function getAsStringAttribute(): string
    {
        return $this->name;
    }
}
