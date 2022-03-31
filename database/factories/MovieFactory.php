<?php

namespace Database\Factories;

use App\Models\Genere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genere= Genere::all();
       
        return [
            'title'=>$this->faker->sentence(rand(1,1)),
            'year'=>$this->faker->year(),
            'synopsis'=>$this ->faker-> realText($maxNbChars = 75, $indexSize = 2),
            'duration'=>$this->faker->numberBetween($min = 100, $max = 120),

            'genere'=>$this->faker->randomElement($genere),
            'type'=>$this->faker->numberBetween($min = 1, $max = 2),
            'seasson'=>$this->faker->numberBetween($min = 0, $max = 15),
            'chapter'=>$this->faker->numberBetween($min = 0, $max = 15),
            'image'=>$this->faker->imageUrl($width = 320, $height = 240,'movies' ,true,'laravel'),
            'file'=>$this->faker->file($sourceDir = '/', $targetDir = '/tmp'),
        ];
    }
}
