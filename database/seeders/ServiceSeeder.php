<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Service::create([
        'name'          =>   'Casa siège',
            ]);
        Service::create([
        'name'          =>   'Laayoune siège',
         ]);
        Service::create([
        'name'          =>   'Safi siège',
         ]);
    }
}
