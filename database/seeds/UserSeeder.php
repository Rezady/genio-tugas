<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [

                'nik' => 20001,
                'hakAkses' => 'Admin',
                'statusAKun' => 'Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nik' => 20002,
                'hakAkses' => 'User',
                'statusAKun' => 'Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nik' => 20003,
                'hakAkses' => 'Admin',
                'statusAKun' => 'Tidak Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nik' => 20004,

                'statusAKun' => 'Aktif',

            ]
        );
    }
}
