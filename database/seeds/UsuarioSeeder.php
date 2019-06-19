<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->update([
            'password' => bcrypt('123456')
        ])->where('id_usuario', 65);
    }
}
