<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'site_name' => $this->faker->text(20),
            'site_title' => $this->faker->text(20),
            'site_email' => $this->faker->safeEmail(),
            'footer_name' => $this->faker->text(20),
            'sidebar_collapse' => $this->faker->randomElement([true, false]),
        ];
    }
}
