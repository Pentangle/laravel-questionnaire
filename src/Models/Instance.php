<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Database\Factories\InstanceFactory;

class Instance extends Model
{
    use HasFactory;

    /**
     * Instance is the glue that binds the responses to the questions.
     **/

    protected $guarded = ['id'];

    /**
     * Create a new factory instance for the model.
     *
     * @return InstanceFactory
     */
    protected static function newFactory(): InstanceFactory
    {
        return InstanceFactory::new();
    }

    /**
     * Relationships
     */

    /**
     * The polymorphic class of the model that has answered the question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function questionable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function responses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Response::class);
    }

    /**
     * Accessors
     */
}
