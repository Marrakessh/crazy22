<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'bio' => $this->faker->text,
            'address1' =>$this->faker->streetAddress,
            'address2' =>$this->faker->streetAddress,
            'city'=>$this->faker->city,
            'county'   =>$this->faker->county,
            'postcode' =>$this->faker->postcode,
            'phone'=>$this->faker->phoneNumber,
            'email' =>$this->faker->email,
            'website' =>$this->faker->domainName,
            'contact_name'=>$this->faker->name,
        ];
    }
}
