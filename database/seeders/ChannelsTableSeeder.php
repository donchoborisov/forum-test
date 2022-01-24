<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([

            'name' => 'Laravel 8',
            'slug' => str_slug('Laravel 8')

        ]);

        Channel::create([

            'name' => 'Vue JS 3',
            'slug' => str_slug('Vue JS 3')

        ]);


        Channel::create([

            'name' => 'Angular 7',
            'slug' => str_slug('Angular 7')

        ]);

        Channel::create([

            'name' => 'Node JS',
            'slug' => str_slug('Node JS')

        ]);
    }
}
