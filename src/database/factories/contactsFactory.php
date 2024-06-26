<?php

namespace Database\Factories;


use App\Models\contacts
use Illuminate\Database\Eloquent\Factories\Factory;

class contactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'gender'=> $this->faker->randomElement(['女性', '男性', 'その他']),
            'email'=>$this->faker->safeEmail,
            'tel'=>$this->faker->phoneNumber,
            'address'=>$this->faker->streetAddress,
            'build'=>$this->faker->secondaryAddress,

        ];
    }
    //name','gender', 'email', 'tel','address','build','kind','content'
}
