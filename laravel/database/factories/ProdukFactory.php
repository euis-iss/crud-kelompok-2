<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_produk' => $this->faker->unique()->numerify('PRD-####'),
            'nama_produk' => $this->faker->word(),
            'kategori' => $this->faker->randomElement(['Elektronik', '']),
            'merek'       => $this->faker->company(),
             'harga'       => $this->faker->randomFloat(2, 10000, 1000000),
             'stok'        => $this->faker->numberBetween(1, 100),
             'keterangan'  => $this->faker->sentence(10),
        ];
    }
}
