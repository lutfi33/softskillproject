<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'fullName' => 'Lutfi Hermansah',
                'idPengguna' => '212520043',
                'username' => 'lutfi',
                'password' =>bcrypt('123456'),
                'role' => 'peserta'
            ],
            [
                'fullName' => 'Lutfi Hermansah',
                'idPengguna' => '11223344',
                'username' => 'lutfifasil',
                'password' =>bcrypt('123456'),
                'role' => 'fasilitator'
            ],
            [
                'fullName' => 'Lutfi Hermansah',
                'idPengguna' => '123456',
                'username' => 'lutfisuper',
                'password' =>bcrypt('123456'),
                'role' => 'superuser'
            ]
        ];

        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
