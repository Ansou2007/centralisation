<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
            'name'=>'ramatoulaye BA',
            'email'=>'ramatoulaye.ba@unchk.edu.sn',
            'password'=>Hash::make('agt@2024')
        ]);
        User::insert(
            [
            'name'=>'Ansoumane Michel',
            'email'=>'ansoumanemichel.tamba@unchk.edu.sn',
            'password'=>Hash::make('agt@2024')
        ]);
        User::insert(
            [
            'name'=>'Boubacar Diallo',
            'email'=>'boubabcar.diallo@unchk.edu.sn',
            'password'=>Hash::make('agt@2024')
        ]);
    }
}
