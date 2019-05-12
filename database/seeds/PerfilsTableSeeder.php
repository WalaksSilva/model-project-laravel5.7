<?php

use Illuminate\Database\Seeder;

class PerfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Perfil::class)->create([
            'nome' => 'Admin'
        ]);

        factory(App\Models\Perfil::class)->create([
            'nome' => 'Front'
        ]);
    }
}
