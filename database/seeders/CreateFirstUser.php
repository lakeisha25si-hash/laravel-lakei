<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use Illuminate\Support\Facades\Hash;


class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'lakei25si@mahasiswa.pcr.ac.id',
            'password' => hash::make('lakei25si'),
        ]);
    }
}
