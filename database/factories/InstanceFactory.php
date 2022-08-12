<?php

namespace Pentangle\LaravelQuestionnaire\Database\Factories;

use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Pentangle\LaravelQuestionnaire\Models\Instance;
use Pentangle\LaravelQuestionnaire\Models\Response;

class InstanceFactory extends Factory
{
    protected $model = Instance::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'response_id' => Response::factory()->create(),
            'participant_id' => Venue::factory()->create(),
            'participant_type' => '\App\Models\Venue',
        ];
    }
}
