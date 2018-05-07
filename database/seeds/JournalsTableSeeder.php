<?php

use Illuminate\Database\Seeder;

class JournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $journals = factory(App\Journal::class, 20)->create();
    }
}
