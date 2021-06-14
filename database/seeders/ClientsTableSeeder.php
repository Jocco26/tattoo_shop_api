<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //factory(App\Clients::class, 30)->create();
        \App\Models\Client::factory()->count(30)->create();
        
    }
}
