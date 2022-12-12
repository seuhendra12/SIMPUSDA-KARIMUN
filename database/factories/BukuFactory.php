<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'=>$this->faker->sentence(3),
            'pengarang'=>$this->faker->name(),
            'penerbit'=>$this->faker->sentence(2),
            'tahun'=>$this->faker->date('Y'),
            'ISBN'=>$this->faker->bothify('#######'),
            'kategori_id'=>mt_rand(1,2),
            'klasifikasi'=>$this->faker->randomNumber(),
            'jumlah'=>mt_rand(1,10),
            'file_upload' => '',
        ];
    }
}
