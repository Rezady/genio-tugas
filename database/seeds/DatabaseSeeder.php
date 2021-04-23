<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('staff')->insert(
            [
                'nik' => 20001,
                'nama' => 'Dewa',
                'email' => 'dewa@genio.co.id',
                'password' => 'merah',
                'telepon' => '0217336634'
            ]
        );
        DB::table('staff')->insert(
            [
                'nik' => 20002,
                'nama' => 'Nyoman',
                'email' => 'nyoman@genio.co.id',
                'password' => 'kuning',
                'telepon' => '0217336635'
            ]
        );
        DB::table('staff')->insert(
            [
                'nik' => 20003,
                'nama' => 'Wester',
                'email' => 'wester@genio.co.id',
                'password' => 'hijau',
                'telepon' => '0217336636'
            ]
        );

        DB::table('staff')->insert([
            'nik' => 20004,
            'nama' => 'Yusadi',
            'email' => 'yusadi@genio.co.id',
            'password' => 'hitam',
            'telepon' => '0217336636'
        ]);

        DB::table('staff')->insert([
            'nik' => 20005,
            'nama' => 'Putri',
            'email' => 'putri@genio.co.id',
            'password' => 'biru',
            'telepon' => '0217336637'
        ]);
        DB::table('users')->insert(
            [

                'nikUser' => 20001,
                'hakAkses' => 'Admin',
                'statusAkun' => 'Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nikUser' => 20002,
                'hakAkses' => 'User',
                'statusAkun' => 'Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nikUser' => 20003,
                'hakAkses' => 'Admin',
                'statusAkun' => 'Tidak Aktif',

            ]
        );

        DB::table('users')->insert(
            [

                'nikUser' => 20004,
                'hakAkses' => '',
                'statusAkun' => 'Aktif',

            ]
        );
    }
}
