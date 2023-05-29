<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\peoples;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        peoples::insert([
            'nama' => "syucie",
            'alamat' => "Cikambuy",
            'umur' => 12,
            'statusPekerjaan' => "pelajar",
        ]);
        peoples::insert([
            'nama' => "maya",
            'alamat' => "Cupu",
            'umur' => 11,
            'statusPekerjaan' => "pelajar",
        ]);
        peoples::insert([
            'nama' => "iis",
            'alamat' => "Cibaduyut",
            'umur' => 13,
            'statusPekerjaan' => "pelajar",
        ]);
        peoples::insert([
            'nama' => "jeno",
            'alamat' => "Cirangrang",
            'umur' => 15,
            'statusPekerjaan' => "mahasiswa",
        ]);
        peoples::insert([
            'nama' => "ade",
            'alamat' => "Cimahi",
            'umur' => 56,
            'statusPekerjaan' => "pelajar",
        ]);
    }
}