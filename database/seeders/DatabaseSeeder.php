<?php

namespace Database\Seeders;

use App\Models\Service;
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
        Service::create([
            'name' => 'Starter',
            'price' => '10000',
            'type' => 'Shared Hosting',
            'caption' => 'Sesuai untuk Pemula, Landing Page, Blog Pribadi',
            'specs' => 'Spek 1, Spek 2'
        ]);

        Service::create([
            'name' => 'Personal',
            'price' => '20000',
            'type' => 'Shared Hosting',
            'caption' => 'Sesuai untuk Website Bisnis, UKM, Organisasi, Komunitas, dll',
            'specs' => 'Spek 1, Spek 2, Spek 3'
        ]);

        Service::create([
            'name' => 'Business',
            'price' => '40000',
            'type' => 'Shared Hosting',
            'caption' => 'Sesuai untuk Website Bisnis, Portal Berita, Toko Online, dll',
            'specs' => 'Spek 1, Spek 2, Spek 3'
        ]);

        Service::create([
            'name' => 'Starter',
            'price' => '100000',
            'type' => 'VPS Hosting',
            'specs' => 'Spek 1, Spek 2'
        ]);

        Service::create([
            'name' => 'Personal',
            'price' => '250000',
            'type' => 'VPS Hosting',
            'specs' => 'Spek 1, Spek 2, Spek 3'
        ]);

        Service::create([
            'name' => 'Business',
            'price' => '350000',
            'type' => 'VPS Hosting',
            'specs' => 'Spek 1, Spek 2'
        ]);

        Service::create([
            'name' => 'Starter',
            'price' => '20000',
            'type' => 'Mail Server',
            'specs' => 'Spek 1, Spek 2'
        ]);

        Service::create([
            'name' => 'Personal',
            'price' => '40000',
            'type' => 'Mail Server',
            'specs' => 'Spek 1, Spek 2, Spek 3'
        ]);

        Service::create([
            'name' => 'Business',
            'price' => '60000',
            'type' => 'Mail Server',
            'specs' => 'Spek 1, Spek 2'
        ]);
    }
}
