<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomor_anggota'=>$this->faker->bothify('########'),
            'nik'=>$this->faker->bothify('################'),
            'nama'=>$this->faker->name(),
            'tempat_lahir'=>$this->faker->city(),
            'tanggal_lahir'=>$this->faker->date('Y-m-d'),
            'jenis_kelamin'=>$this->faker->randomElement(['L','P']),
            'no_telp'=>$this->faker->phoneNumber(),
            'pekerjaan_id'=>mt_rand(1,2),
            'alamat'=>$this->faker->address()
        ];
    }
}
