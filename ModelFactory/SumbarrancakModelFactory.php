<?php

namespace Database\Factories;

use App\Models\SumbarrancakModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class SumbarrancakModelFactory extends Factory
{
    
    
    
    protected $model = SumbarrancakModel::class;

    
    public function definition()
    {
        return [
            'nama_model' => $this->faker->name(),
            'tempatlahir' => $this->faker->city(),
            'tanggallahir' => $this->faker->date($format='Y-m-d', $max='now'),
            'alamat'    => $this->faker->address(),
            'no_hp'     => $this->faker->phoneNumber()
        ];
    }
}